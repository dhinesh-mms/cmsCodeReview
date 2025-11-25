<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Middleware;

use League\OAuth2\Server\Grant\AuthCodeGrant;
use League\OAuth2\Server\Grant\RefreshTokenGrant;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface as Middleware;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\App as App;
use Xibo\OAuth\RefreshTokenRepository;
use Xibo\Support\Exception\ConfigurationException;

/**
 * Class ApiAuthentication
 * This middleware protects the AUTH entry point
 * @package Xibo\Middleware
 */
class ApiAuthentication implements Middleware
{
    /* @var App $app */
    private $app;

    /**
     * ApiAuthorizationOAuth constructor.
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \Xibo\Support\Exception\ConfigurationException
     */
    public function process(Request $request, RequestHandler $handler): Response
    {
        $app = $this->app;
        $container = $app->getContainer();

        // DI in the server
        $container->set('server', function(ContainerInterface $container) {
            /** @var \Xibo\Service\LogServiceInterface $logger */
            $logger = $container->get('logService');

            // API Keys
            $apiKeyPaths = $container->get('configService')->getApiKeyDetails();
            $privateKey = $apiKeyPaths['privateKeyPath'];
            $encryptionKey = $apiKeyPaths['encryptionKey'];

            try {
                $server = new \League\OAuth2\Server\AuthorizationServer(
                    $container->get('applicationFactory'),
                    new \Xibo\OAuth\AccessTokenRepository($logger, $container->get('pool'), $container->get('applicationFactory')),
                    $container->get('applicationScopeFactory'),
                    $privateKey,
                    $encryptionKey
                );

                // Default scope
                // must be set before we enable any grant types.
                $server->setDefaultScope('all');

                // Grant Types
                $server->enableGrantType(
                    new \League\OAuth2\Server\Grant\ClientCredentialsGrant(),
                    new \DateInterval('PT1H')
                );

                $server->enableGrantType(
                    new AuthCodeGrant(
                        new \Xibo\OAuth\AuthCodeRepository(),
                        new \Xibo\OAuth\RefreshTokenRepository($logger, $container->get('pool')),
                        new \DateInterval('PT10M')
                    ),
                    new \DateInterval('PT1H')
                );

                $server->enableGrantType(new RefreshTokenGrant(new RefreshTokenRepository($logger, $container->get('pool'))));

                return $server;
            } catch (\LogicException $exception) {
                $logger->error($exception->getMessage());
                throw new ConfigurationException('API configuration problem, consult your administrator');
            }
        });

        return $handler->handle($request->withAttribute('name', 'auth'));
    }
}