<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Xibo\Helper\ApplicationState;

/**
 * Class WebAuthentication
 * @package Xibo\Middleware
 */
class WebAuthentication extends AuthenticationBase
{
    /** @inheritDoc */
    public function addRoutes()
    {
        return $this;
    }

    /** @inheritDoc */
    public function redirectToLogin(Request $request)
    {
        if ($this->isAjax($request)) {
            return $this->createResponse($request)
                ->withJson(ApplicationState::asRequiresLogin());
        } else {
            return $this->createResponse($request)->withRedirect($this->getRouteParser()->urlFor('login'));
        }
    }

    /** @inheritDoc */
    public function getPublicRoutes(Request $request)
    {
        return $request->getAttribute('publicRoutes', []);
    }

    /** @inheritDoc */
    public function shouldRedirectPublicRoute($route)
    {
        return $this->getSession()->isExpired() && ($route == '/login/ping' || $route == 'clock');
    }

    /** @inheritDoc */
    public function addToRequest(Request $request)
    {
        return $request;
    }
}