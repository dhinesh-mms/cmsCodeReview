<?php
/**
 * Oasys Digital Signage
 */

use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Slim\Views\TwigMiddleware;
use Xibo\Factory\ContainerFactory;

DEFINE('XIBO', true);
define('PROJECT_ROOT', realpath(__DIR__ . '/..'));

ini_set('session.cookie_samesite', 'Lax');
ini_set('session.cookie_secure', 'On');
ini_set('session.cookie_httponly', 'On');

header("Cache-Control: no-cache, no-store, pre-check=0, post-check=0, max-age=0, s-maxage=0, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); //HTTP 1.0.
header("Expires: 0"); //Proxies

// Hide X-Powered-By with expose_php 

header('Server: ');

// Remove X-Powered-By header:

header('X-Powered-By: ');

//Remove X-Generator header (if using a framework):

header('X-Generator: ');



header("Content-Security-Policy: default-src 'self'; img-src 'self' data: blob:;media-src 'self' blob:;script-src 'self' 'unsafe-inline' 'unsafe-eval'; object-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline';");


// Cross-Origin Resource Sharing (CORS)
header("Access-Control-Allow-Origin: *");

// X-Frame-Options
header("X-Frame-Options: SAMEORIGIN");

// X-Content-Type-Options
header("X-Content-Type-Options: nosniff");

// X-XSS-Protection
header("X-XSS-Protection: 1; mode=block");

// Strict-Transport-Security (HSTS)
//header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

// Referrer-Policy
header("Referrer-Policy: no-referrer");

header('Feature-Policy: geolocation \'self\'; microphone \'none\'; camera \'none\'');

/*$conn = oci_connect("xvsfdn", "AAssddff##123456", "172.27.206.135:9027/neduuat");

        if(!$conn) {
          $error = ocierror();
           printf("Error was: %s", $error["message"]);
           die();
         }
*/


// Disable TRACE method
if ($_SERVER['REQUEST_METHOD'] == 'TRACE') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit;
}


require PROJECT_ROOT . '/vendor/autoload.php';

// Enable/Disable logging
if (\Xibo\Helper\Environment::isDevMode() || \Xibo\Helper\Environment::isForceDebugging()) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}



$conn = oci_connect("xvsfdn", "AAssddff##1234567", "172.27.131.192:9027/neduuat");

        if(!$conn) {
          $error = ocierror();
           printf("Error was: %s", $error["message"]);
           die();
         //echo "Failed to connect to Oracle";
        // exit();
        }



// Should we show the installer?
if (!file_exists('settings.php')) {
    // Check to see if the install app is available
    if (file_exists(PROJECT_ROOT . '/web/install/index.php')) {
        header('Location: install/1');
        exit();
    } else {
        // We can't do anything here - no install app and no settings file.
        die('Not configured');
    }
}

// Check that the cache folder if writeable - if it isn't we're in big trouble
if (!is_writable(PROJECT_ROOT . '/cache')) {
    die('Installation Error: Cannot write files into the Cache Folder');
}

// Create the container for dependency injection.
try {
    $container = ContainerFactory::create();
} catch (Exception $e) {
    die($e->getMessage());
}

// Configure Monolog
$container->set('logger', function (ContainerInterface $container) {
    $logger = new Logger('WEB');

    $uidProcessor = new UidProcessor();
    // db
    $dbhandler  =  new \Xibo\Helper\DatabaseLogHandler();

    $logger->pushProcessor($uidProcessor);
    $logger->pushHandler($dbhandler);

    return $logger;
});


$conn = oci_connect("xvsfdn", "AAssddff##1234567", "172.27.131.192:9027/neduuat");

        if(!$conn) {
          $error = ocierror();
           printf("Error was: %s", $error["message"]);
           die();
         //echo "Failed to connect to Oracle";
        // exit();
        }



// Create a Slim application
$app = \DI\Bridge\Slim\Bridge::create($container);
$app->setBasePath($container->get('basePath'));

// Config
$container->get('configService');
$container->set('name', 'web');

//
// Middleware (onion, outside inwards and then out again - i.e. the last one is first and last);
//
$app->add(new \Xibo\Middleware\Actions($app));
$app->add(new \Xibo\Middleware\ConnectorMiddleware($app));
$app->add(new \Xibo\Middleware\ListenersMiddleware($app));
$app->add(new \Xibo\Middleware\Theme($app));
$app->add(new \Xibo\Middleware\CsrfGuard($app));
$app->add(new \Xibo\Middleware\Csp($container));

// Authentication
$authentication = ($container->get('configService')->authentication != null)
    ? $container->get('configService')->authentication
    : (new \Xibo\Middleware\WebAuthentication());
$app->add($authentication->setDependencies($app)->addRoutes());
$app->add(new RKA\Middleware\IpAddress(true, []));
// Handle additional Middleware
\Xibo\Middleware\State::setMiddleWare($app);

// TODO reconfigure this and enable
//$app->add(new Xibo\Middleware\HttpCache());
$app->add(new \Xibo\Middleware\State($app));
$app->add(new \Xibo\Middleware\Log($app));
$app->add(TwigMiddleware::createFromContainer($app));
$app->add(new \Xibo\Middleware\Storage($app));
$app->add(new \Xibo\Middleware\Xmr($app));
$app->addRoutingMiddleware();
//
// End Middleware
//

// Add Error Middleware
$app->addErrorMiddleware(
    \Xibo\Helper\Environment::isDevMode() || \Xibo\Helper\Environment::isForceDebugging(),
    true,
    true
)
    ->setDefaultErrorHandler(\Xibo\Middleware\Handlers::webErrorHandler($container));

// All application routes
require PROJECT_ROOT . '/lib/routes-web.php';
require PROJECT_ROOT . '/lib/routes.php';

// Run App
try {
    $app->run();
} catch (Exception $e) {
    echo 'Fatal Error - sorry this shouldn\'t happen. ';
    echo '<br>' . $e->getMessage();

    // Only output debug trace if we're configured to display errors
    if (ini_get('display_errors') == 1) {
        echo '<br><br><code>' . nl2br($e->getTraceAsString()) . '</code>';
    }
}
