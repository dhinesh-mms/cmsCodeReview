<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Middleware;

use Slim\App;

/**
 * Trait CustomMiddlewareTrait
 * Add this trait to all custom middleware
 * @package Xibo\Middleware
 */
trait CustomMiddlewareTrait
{
    /** @var \Slim\App */
    private $app;

    /**
     * @param \Slim\App $app
     * @return $this
     */
    public function setApp(App $app)
    {
        $this->app = $app;
        return $this;
    }

    /**
     * @return \Slim\App
     */
    protected function getApp()
    {
        return $this->app;
    }

    /**
     * @return \DI\Container|\Psr\Container\ContainerInterface
     */
    protected function getContainer()
    {
        return $this->app->getContainer();
    }

    /***
     * @param $key
     * @return mixed
     */
    protected function getFromContainer($key)
    {
        return $this->getContainer()->get($key);
    }
}
