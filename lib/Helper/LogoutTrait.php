<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Helper;

use Slim\Http\ServerRequest as Request;
use Xibo\Entity\User;
use Xibo\Service\LogServiceInterface;

trait LogoutTrait
{
    public function completeLogoutFlow(User $user, Session $session, LogServiceInterface $log, Request $request)
    {
        $user->touch();

        unset($_SESSION['userid']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        $session->setIsExpired(1);

        $log->audit('User', $user->userId, 'User logout', [
            'UserAgent' => $request->getHeader('User-Agent')
        ]);
    }
}
