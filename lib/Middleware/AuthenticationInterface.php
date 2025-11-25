<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Middleware;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

/**
 * Interface AuthenticationInterface
 * @package Xibo\Middleware
 */
interface AuthenticationInterface
{
    /**
     * @param \Slim\App $app
     * @return mixed
     */
    public function setDependencies(App $app);

    /**
     * @return $this
     */
    public function addRoutes();

    /**
     * @param Request $request
     * @return \Psr\Http\Message\ResponseInterface|\Slim\Http\Response
     */
    public function redirectToLogin(Request $request);

    /**
     * @param Request $request
     * @return array
     */
    public function getPublicRoutes(Request $request);

    /**
     * Should this public route be redirected to login when the session is expired?
     * @param string $route
     * @return bool
     */
    public function shouldRedirectPublicRoute($route);

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return Request
     */
    public function addToRequest(Request $request);
}