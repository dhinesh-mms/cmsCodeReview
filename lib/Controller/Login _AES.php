<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Controller;

use RobThree\Auth\TwoFactorAuth;
use Slim\Flash\Messages;
use Slim\Http\Response as Response;
use Slim\Http\ServerRequest as Request;
use Slim\Routing\RouteContext;
use Xibo\Entity\User;
use Xibo\Factory\UserFactory;
use Xibo\Helper\Environment;
use Xibo\Helper\HttpsDetect;
use Xibo\Helper\LogoutTrait;
use Xibo\Helper\Random;
use Xibo\Helper\Session;
use Xibo\Support\Exception\AccessDeniedException;
use Xibo\Support\Exception\ConfigurationException;
use Xibo\Support\Exception\ExpiredException;
use Xibo\Support\Exception\GeneralException;
use Xibo\Support\Exception\InvalidArgumentException;
use Xibo\Support\Exception\NotFoundException;
use Xibo\Storage\PdoStorageService;

/**
 * Class Login
 * @package Xibo\Controller
 */
class Login extends Base
{
    use LogoutTrait;

    /** @var Session */
    private $session;

    /** @var UserFactory */
    private $userFactory;

    /** @var \Stash\Interfaces\PoolInterface */
    private $pool;
    /**
     * @var Messages
     */
    private $flash;

    /**
     * Set common dependencies.
     * @param Session $session
     * @param UserFactory $userFactory
     * @param \Stash\Interfaces\PoolInterface $pool
     */
    public function __construct($session, $userFactory, $pool)
    {
        $this->session = $session;
        $this->userFactory = $userFactory;
        $this->pool = $pool;
    }

    /**
     * Get Flash Message
     *
     * @return Messages
     */
    protected function getFlash()
    {
        return $this->flash;
    }

    public function setFlash(Messages $messages)
    {
        $this->flash = $messages;
    }

    /**
     * Output a login form
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     * @throws GeneralException
     * @throws \Xibo\Support\Exception\ControllerNotImplemented
     */
    public function loginForm(Request $request, Response $response)
    {
        // Sanitize the body
        $sanitizedRequestBody = $this->getSanitizer($request->getParams());

           // CAPTCHA
        include("../web/captcha/simple-php-captcha.php");
        $_SESSION['captcha'] = simple_php_captcha();
        if($_SESSION['captcha']['code']){
            $this->getFlash()->addMessage('captcha_message', __($_SESSION['captcha']['code']));
            $captcha_code = $_SESSION['captcha']['code'];
        }

        // Check to see if the user has provided a special token
        $nonce = $sanitizedRequestBody->getString('nonce');

        if ($nonce != '') {
            // We have a nonce provided, so validate that in preference to showing the form.
            $nonce = explode('::', $nonce);
            $this->getLog()->debug('Nonce is ' . var_export($nonce, true));

            $cache = $this->pool->getItem('/nonce/' . $nonce[0]);

            $validated = $cache->get();

            if ($cache->isMiss()) {
                $this->getLog()->error('Expired nonce used.');
                $this->getFlash()->addMessageNow('login_message', __('This link has expired.'));
            } else if (!password_verify($nonce[1], $validated['hash'])) {
                $this->getLog()->error('Invalid nonce used.');
                $this->getFlash()->addMessageNow('login_message', __('This link has expired.'));
            } else {
                // We're valid.
                $this->pool->deleteItem('/nonce/' . $nonce[0]);

                try {
                    $user = $this->userFactory->getById($validated['userId']);

                    // Log in this user
                    $user->touch(true);

                    $this->getLog()->info($user->userName . ' user logged in via token.');

                    // Set the userId on the log object
                    $this->getLog()->setUserId($user->userId);
                    $this->getLog()->setIpAddress($request->getAttribute('ip_address'));

                    // Expire all sessions
                    $session = $this->session;

                    // this is a security measure in case the user is logged in somewhere else.
                    // (not this one though, otherwise we will deadlock
                    $session->expireAllSessionsForUser($user->userId);

                    // Switch Session ID's
                    $session->setIsExpired(0);
                    $session->regenerateSessionId();
                    $session->setUser($user->userId);
                    $this->getLog()->setSessionHistoryId($session->get('sessionHistoryId'));

                    // Audit Log
                    $this->getLog()->audit('User', $user->userId, 'Login Granted via token', [
                        'UserAgent' => $request->getHeader('User-Agent')
                    ]);

                    return $response->withRedirect($this->urlFor($request, 'home'));
                } catch (NotFoundException $notFoundException) {
                    $this->getLog()->error('Valid nonce for non-existing user');
                    $this->getFlash()->addMessageNow('login_message', __('This link has expired.'));
                }
            }
        }

        // Check to see if the password reminder functionality is enabled.
        $passwordReminderEnabled = $this->getConfig()->getSetting('PASSWORD_REMINDER_ENABLED');
        $mailFrom = $this->getConfig()->getSetting('mail_from');
        $authCASEnabled = isset($this->getConfig()->casSettings);
        
        // Template
        $this->getState()->template = 'login';
        $this->getState()->setData([
            'passwordReminderEnabled' => (($passwordReminderEnabled === 'On' || $passwordReminderEnabled === 'On except Admin') && $mailFrom != ''),
            'authCASEnabled' => $authCASEnabled,
            'version' => Environment::$WEBSITE_VERSION_NAME,
            'captcha_code' => $captcha_code
        ]);
       return $this->render($request, $response);
    }

    /**
     * Login
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws InvalidArgumentException
     * @throws \Xibo\Support\Exception\DuplicateEntityException
     */
    public function login(Request $request, Response $response)
    {
        $parsedRequest = $this->getSanitizer($request->getParsedBody());
        $routeParser = RouteContext::fromRequest($request)->getRouteParser();

        // Capture the prior route (if there is one)
        $user = null;
        $redirect = 'login';
        $priorRoute = ($parsedRequest->getString('priorRoute'));

        // CAPTCHA CHECK
        if ($_POST['captcha'] != $_SESSION['captcha']['code']) {
          
            $this->getFlash()->addMessage('login_message', __('Invalid Captcha. Please try again.'));
            return $response->withRedirect('login');
        }


        if (isset($_SESSION['loginCount'])){

           if ($_SESSION['loginCount'] > 3)
           {
                $now = time();
                $ontime = $_SESSION['loginTime'] + 900;    //900 = 15 min X 60 sec
                 
                if($now >= $ontime){
                     unset($_SESSION['loginCount']);
                     unset($_SESSION['loginTime']);
                }
                else{
                    $this->getFlash()->addMessage('login_message', __('Access denied for 30 minutes.'));
                    return $response->withRedirect('login');
                }
           }
        }

        try {
            // Get our username and password
            $username = $parsedRequest->getString('username');
            $password = $parsedRequest->getString('password');

            $jsonStr = $password;
            $passphrase = "ubie1mh5l416h";
            $json = json_decode($jsonStr, true);
            $salt = hex2bin($json["s"]);
            $iv = hex2bin($json["iv"]);
            $ct = base64_decode($json["ct"]);
            $concatedPassphrase = $passphrase . $salt;

            $md5 = [];
            $md5[0] = hash('md5', $concatedPassphrase, true);
            $result = $md5[0];

            for ($i = 1; $i < 3; $i++) {
                $md5[$i] = hash('md5', $md5[$i - 1] . $concatedPassphrase, true);
                $result .= $md5[$i];
            }

            $key = substr($result, 0, 32);
            $data = openssl_decrypt($ct, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
            $password = json_decode($data, true);


            $this->getLog()->debug('Login with username ' . $username);

            // Get our user
            try {
                $user = $this->userFactory->getByName($username);

                // Retired user
                if ($user->retired === 1) {
                    throw new AccessDeniedException(__('Sorry this account does not exist or does not have permission to access the web portal.'));
                }
               // echo json_encode($password);exit;

                // Check password
                $user->checkPassword($password);

                // check if 2FA is enabled
                if ($user->twoFactorTypeId != 0) {
                    $_SESSION['tfaUsername'] = $user->userName;
                    $this->getFlash()->addMessage('priorRoute', $priorRoute);
                    return $response->withRedirect($routeParser->urlFor('tfa'));
                }

                // We are logged in, so complete the login flow
                $this->completeLoginFlow($user, $request);
                if($user->userId != 0) {
                    $msg = $this->checkExpiry($user->userId);
                }

                unset($_SESSION['loginCount']);
                unset($_SESSION['loginTime']);
            }
            catch (NotFoundException $e) {
                throw new AccessDeniedException(__('User not found'));
            }

            $redirect = ($priorRoute == '' || $priorRoute == '/' || stripos($priorRoute, $routeParser->urlFor('login'))) ? $routeParser->urlFor('home') : $priorRoute;
        }
        catch (AccessDeniedException $e) {
            $this->getLog()->warning($e->getMessage());
            //$this->getFlash()->addMessage('login_message', __('Username or Password incorrect'));
             if (isset($_SESSION['loginCount'])){

               $_SESSION['loginCount']++;
              
               $this->getFlash()->addMessage('login_message', __('Username or Password incorrect' . " Invalid attempt " . $_SESSION['loginCount']));
            
               if ($_SESSION['loginCount'] > 3)
               {
                   $this->getFlash()->addMessage('login_message', __('Access denied for 30 minutes'));
                   $_SESSION['loginTime'] = time();
               }

            }else{

                $_SESSION['loginCount'] = 1;
                $_SESSION['loginTime'] = time();
                $this->getFlash()->addMessage('login_message', __('Username or Password incorrect' . " Invalid attempt " . $_SESSION['loginCount']));
            }    
            $this->getFlash()->addMessage('priorRoute', $priorRoute);
            return $response->withRedirect($redirect);
        }
        catch (ExpiredException $e) {
            $this->getFlash()->addMessage('priorRoute', $priorRoute);
        }

        if($user->userId != 0) {
            $count = $this->checkSession($user->userId);        
                
            if($count >= 1) {
                $this->getFlash()->addMessage('login_message', __('Multiple login of same account disallowed'));
                $this->logout();
            }
        }

        $this->setNoOutput(true);
        $this->getLog()->debug('Redirect to ' . $redirect);
        return $response->withRedirect($redirect);
    }

    /**
     * Forgotten password link requested
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws ConfigurationException
     * @throws \PHPMailer\PHPMailer\Exception
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function forgottenPassword(Request $request, Response $response)
    {
        // Is this functionality enabled?
        $passwordReminderEnabled = $this->getConfig()->getSetting('PASSWORD_REMINDER_ENABLED');
        $mailFrom = $this->getConfig()->getSetting('mail_from');

        $parsedRequest = $this->getSanitizer($request->getParsedBody());
        $routeParser = RouteContext::fromRequest($request)->getRouteParser();

        if (!(($passwordReminderEnabled === 'On' || $passwordReminderEnabled === 'On except Admin') && $mailFrom != '')) {
            throw new ConfigurationException(__('This feature has been disabled by your administrator'));
        }

        // Get our username
        $username = $parsedRequest->getString('username');

        // Log
        $this->getLog()->info('Forgotten Password Request for ' . $username);

        // Check to see if the provided username is valid, and if so, record a nonce and send them a link
        try {
            // Get our user
            /* @var User $user */
            $user = $this->userFactory->getByName($username);

            // Does this user have an email address associated to their user record?
            if ($user->email == '') {
                throw new NotFoundException(__('No email'));
            }

            // Nonce parts (nonce isn't ever stored, only the hash of it is stored, it only exists in the email)
            $action = 'user-reset-password-' . Random::generateString(10);
            $nonce = Random::generateString(20);

            // Create a nonce for this user and store it somewhere
            $cache = $this->pool->getItem('/nonce/' . $action);

            $cache->set([
                'action' => $action,
                'hash' => password_hash($nonce, PASSWORD_DEFAULT),
                'userId' => $user->userId
            ]);
            $cache->expiresAfter(1800); // 30 minutes?

            // Save cache
            $this->pool->save($cache);

            // Make a link
            $link = ((new HttpsDetect())->getUrl()) . $routeParser->urlFor('login') . '?nonce=' . $action . '::' . $nonce;

            // Uncomment this to get a debug message showing the link.
            //$this->getLog()->debug('Link is:' . $link);

            // Send the mail
            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->From = $mailFrom;
            $msgFromName = $this->getConfig()->getSetting('mail_from_name');

            if ($msgFromName != null) {
                $mail->FromName = $msgFromName;
            }

            $mail->Subject = __('Password Reset');
            $mail->addAddress($user->email);

            // Body
            $mail->isHTML(true);
            $mail->Body = $this->generateEmailBody($mail->Subject, '<p>' . __('You are receiving this email because a password reminder was requested for your account. If you did not make this request, please report this email to your administrator immediately.') . '</p><a href="' . $link . '">' . __('Reset Password') . '</a>');

            if (!$mail->send()) {
                throw new ConfigurationException('Unable to send password reminder to ' . $user->email);
            } else {
                $this->getFlash()->addMessage(
                    'login_message',
                    __('A reminder email will been sent to this user if they exist'),
                );
            }

            // Audit Log
            $this->getLog()->audit('User', $user->userId, 'Password Reset Link Granted', [
                'UserAgent' => $request->getHeader('User-Agent')
            ]);
        } catch (GeneralException) {
            $this->getFlash()->addMessage(
                'login_message',
                __('A reminder email will been sent to this user if they exist'),
            );
        }

        $this->setNoOutput(true);
        return $response->withRedirect($routeParser->urlFor('login'));
    }

    /**
     * Log out
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     */
    public function logout(Request $request, Response $response)
    {
        $redirect = true;

        if ($request->getQueryParam('redirect') != null) {
            $redirect = $request->getQueryParam('redirect');
        }

        $this->completeLogoutFlow($this->getUser(), $this->session, $this->getLog(), $request);

        if ($redirect) {
            return $response->withRedirect($this->urlFor($request, 'home'));
        }

        return $response->withStatus(200);
    }

    /**
     * Ping Pong
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws GeneralException
     * @throws \Xibo\Support\Exception\ControllerNotImplemented
     */
    public function PingPong(Request $request, Response $response)
    {
        $parseRequest = $this->getSanitizer($request->getQueryParams());
        $this->session->refreshExpiry = ($parseRequest->getCheckbox('refreshSession') == 1);
        $this->getState()->success = true;

        return $this->render($request, $response);
    }

    /**
     * Shows information about Xibo
     *
     * @SWG\Get(
     *  path="/about",
     *  operationId="about",
     *  tags={"misc"},
     *  summary="About",
     *  description="Information about this API, such as Version code, etc",
     *  @SWG\Response(
     *      response=200,
     *      description="successful response",
     *      @SWG\Schema(
     *          type="object",
     *          additionalProperties={
     *              "title"="version",
     *              "type"="string"
     *          }
     *      )
     *  )
     * )
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws GeneralException
     * @throws \Xibo\Support\Exception\ControllerNotImplemented
     */
    public function about(Request $request, Response $response)
    {
        $state = $this->getState();

        if ($request->isXhr()) {
            $state->template = 'about-text';
        } else {
            $state->template = 'about-page';
        }

        $state->setData(['version' => Environment::$WEBSITE_VERSION_NAME, 'sourceUrl' => $this->getConfig()->getThemeConfig('cms_source_url')]);

        return $this->render($request, $response);
    }

    /**
     * Generate an email body
     * @param $subject
     * @param $body
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    private function generateEmailBody($subject, $body)
    {
        return $this->renderTemplateToString('email-template', [
            'config' => $this->getConfig(),
            'subject' => $subject, 'body' => $body
        ]);
    }

    /**
     * 2FA Auth required
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws GeneralException
     * @throws InvalidArgumentException
     * @throws NotFoundException
     * @throws \PHPMailer\PHPMailer\Exception
     * @throws \RobThree\Auth\TwoFactorAuthException
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     * @throws \Xibo\Support\Exception\ControllerNotImplemented
     */
    public function twoFactorAuthForm(Request $request, Response $response)
    {
        if (!isset($_SESSION['tfaUsername'])) {
            $this->getFlash()->addMessage('login_message', __('Session has expired, please log in again'));
            return $response->withRedirect($this->urlFor($request, 'login'));
        }

        $user = $this->userFactory->getByName($_SESSION['tfaUsername']);
        $message = '';

        // if our user has email two factor enabled, we need to send the email with code now
        if ($user->twoFactorTypeId === 1) {

            if ($user->email == '') {
                throw new NotFoundException(__('No email'));
            }

            $mailFrom = $this->getConfig()->getSetting('mail_from');
            $issuerSettings = $this->getConfig()->getSetting('TWOFACTOR_ISSUER');
            $appName = $this->getConfig()->getThemeConfig('app_name');

            if ($issuerSettings !== '') {
                $issuer = $issuerSettings;
            } else {
                $issuer = $appName;
            }

            if ($mailFrom == '') {
                throw new InvalidArgumentException(__('Sending email address in CMS Settings is not configured'), 'mail_from');
            }

            $tfa = new TwoFactorAuth($issuer);

            // Nonce parts (nonce isn't ever stored, only the hash of it is stored, it only exists in the email)
            $action = 'user-tfa-email-auth' . Random::generateString(10);
            $nonce = Random::generateString(20);

            // Create a nonce for this user and store it somewhere
            $cache = $this->pool->getItem('/nonce/' . $action);

            $cache->set([
                'action' => $action,
                'hash' => password_hash($nonce, PASSWORD_DEFAULT),
                'userId' => $user->userId
            ]);
            $cache->expiresAfter(1800); // 30 minutes?

            // Save cache
            $this->pool->save($cache);

            // Make a link
            $code = $tfa->getCode($user->twoFactorSecret);

            // Send the mail
            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = 'base64';
            $mail->From = $mailFrom;
            $msgFromName = $this->getConfig()->getSetting('mail_from_name');

            if ($msgFromName != null) {
                $mail->FromName = $msgFromName;
            }

            $mail->Subject = __('Two Factor Authentication');
            $mail->addAddress($user->email);

            // Body
            $mail->isHTML(true);
            $mail->Body = $this->generateEmailBody($mail->Subject,
                '<p>' . __('You are receiving this email because two factor email authorisation is enabled in your CMS user account. If you did not make this request, please report this email to your administrator immediately.') . '</p>' . '<p>' . $code . '</p>');

            if (!$mail->send()) {
                $message = __('Unable to send two factor code to email address associated with this user');
            } else {
                $message =  __('Two factor code email has been sent to your email address');

                // Audit Log
                $this->getLog()->audit('User', $user->userId, 'Two Factor Code email sent', [
                    'UserAgent' => $request->getHeader('User-Agent')
                ]);
            }
        }

        // Template
        $this->getState()->template = 'tfa';

        // the flash message do not work well here - need to reload the page to see the message, hence the below
        $this->getState()->setData(['message' => $message]);

        return $this->render($request, $response);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface|Response
     * @throws \RobThree\Auth\TwoFactorAuthException
     * @throws \Xibo\Support\Exception\NotFoundException
     */
    public function twoFactorAuthValidate(Request $request, Response $response)
    {
        $user = $this->userFactory->getByName($_SESSION['tfaUsername']);
        $result = false;
        $updatedCodes = [];
        $sanitizedParams = $this->getSanitizer($request->getParams());
        // prior route
        $priorRoute = ($sanitizedParams->getString('priorRoute'));

        if (isset($_POST['code'])) {
            $issuerSettings = $this->getConfig()->getSetting('TWOFACTOR_ISSUER');
            $appName = $this->getConfig()->getThemeConfig('app_name');

            if ($issuerSettings !== '') {
                $issuer = $issuerSettings;
            } else {
                $issuer = $appName;
            }

            $tfa = new TwoFactorAuth($issuer);

            if ($user->twoFactorTypeId === 1 && $user->email !== '') {
                $result = $tfa->verifyCode($user->twoFactorSecret, $sanitizedParams->getString('code'), 9);
            } else {
                $result = $tfa->verifyCode($user->twoFactorSecret, $sanitizedParams->getString('code'), 3);
            }
        } elseif (isset($_POST['recoveryCode'])) {
            // get the array of recovery codes, go through them and try to match provided code
            $codes = $user->twoFactorRecoveryCodes;

            foreach (json_decode($codes) as $code) {

                // if the provided recovery code matches one stored in the database, we want to log in the user
                if ($code === $sanitizedParams->getString('recoveryCode')) {
                    $result = true;
                }

                if ($code !== $sanitizedParams->getString('recoveryCode')) {
                    $updatedCodes[] = $code;
                }

            }
            // recovery codes are one time use, as such we want to update user recovery codes and remove the one that was just used.
            $user->updateRecoveryCodes(json_encode($updatedCodes));
        }

        $redirect = ($priorRoute == '' || $priorRoute == '/' || stripos($priorRoute, $this->urlFor($request,'login'))) ? $this->urlFor($request,'home') : $priorRoute;

        if ($result) {
            // We are logged in at this point
            $this->completeLoginFlow($user, $request);

            $this->setNoOutput(true);

            //unset the session tfaUsername
            unset($_SESSION['tfaUsername']);

            return $response->withRedirect($redirect);
        } else {
            $this->getLog()->error('Authentication code incorrect, redirecting to login page');
            $this->getFlash()->addMessage('login_message', __('Authentication code incorrect'));
            return $response->withRedirect($this->urlFor($request, 'login'));
        }
    }

    /**
     * @param \Xibo\Entity\User $user
     * @param Request $request
     */
    private function completeLoginFlow($user, Request $request)
    {
        $user->touch();

        $this->getLog()->info($user->userName . ' user logged in.');

        // Set the userId on the log object
        $this->getLog()->setUserId($user->userId);
        $this->getLog()->setIpAddress($request->getAttribute('ip_address'));

        // Switch Session ID's
        $session = $this->session;
        $session->setIsExpired(0);
        $session->regenerateSessionId();
        $session->setUser($user->userId);

        $this->getLog()->setSessionHistoryId($session->get('sessionHistoryId'));

        // Audit Log
        $this->getLog()->audit('User', $user->userId, 'Login Granted', [
                'UserAgent' => $request->getHeader('User-Agent')
        ]);
    }

    // Disallow Multiple user logged In and Session Expiry

    public function checkSession($userID)
    {
        $dbh = PdoStorageService::newConnection('default');

        $sth = $dbh->prepare('
          SELECT * FROM `session` WHERE userId = :userID AND isExpired = 0
        ');

        $sth->execute(['userID' => $userID]);
            
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        if(count($rows) > 0) {
            return count($rows);
        }
        else {
            return 0;
        }
    }


     public function checkExpiry($userID)
    {
        $msg = "";
        $dbh = PdoStorageService::newConnection('default');

        $sth = $dbh->prepare('
          SELECT * FROM `session` WHERE userId = :userID AND isExpired = 0
        ');

        $sth->execute(['userID' => $userID]);
        
        foreach ($sth->fetchAll(\PDO::FETCH_ASSOC) as $arr) {
            
            $sid = $arr['session_id'];
            //$sexp = $arr['session_expiration'];
            $lastAcc = $arr['lastAccessed'];
            $current = date("Y-m-d H:i:s");

            $to_time = strtotime($current);
            $from_time = strtotime($lastAcc);
            $diff = round(abs($to_time - $from_time) / 60);
            
            $msg = "\nSID: " . $sid . " \nLast Accessed: " . $lastAcc . "\nCurrent: " . $current . "\nDiff: " . $diff;

            if($diff >= 5) {
                // Change IsExpired to 1
                $sql = "UPDATE `session` SET isExpired = 1 WHERE userId = :userID AND isExpired = 0";
                $stmt = $dbh->prepare($sql);
                $stmt->execute(['userID' => $userID]);
            }
            
        }
        
        return $msg;
                
    }

     public function ipcrUpdate($userID)
    {
            $dbh = PdoStorageService::newConnection('default');
            $sql = "UPDATE `user` SET isPasswordChangeRequired = 1 WHERE userId = :userID";
            $sth = $dbh->prepare($sql);
            $sth->execute(['userID' => $userID]);
    }
    
}
