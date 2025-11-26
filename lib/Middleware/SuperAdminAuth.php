<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Middleware;


use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Xibo\Support\Exception\AccessDeniedException;

/**
 * Class SuperAdminAuth
 * @package Xibo\Middleware
 */
class SuperAdminAuth implements MiddlewareInterface
{
    /** @var \Psr\Container\ContainerInterface */
    private $container;

    /** @var array */
    private $features;

    /**
     * FeatureAuth constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Xibo\Support\Exception\AccessDeniedException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // If no features are provided, then this must be public
        if (!$this->getUser()->isSuperAdmin()) {
            throw new AccessDeniedException(__('You do not have sufficient access'));
        }

        return $handler->handle($request);
    }

    /**
     * @return \Xibo\Entity\User
     */
    private function getUser()
    {
        return $this->container->get('user');
    }
}