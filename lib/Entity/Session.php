<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;

/**
 * Class Session
 * @package Xibo\Entity
 */
class Session implements \JsonSerializable
{
    use EntityTrait;

    public $sessionId;
    public $userId;
    public $userName;
    public $isExpired;
    public $lastAccessed;
    public $remoteAddress;
    public $userAgent;
    public $expiresAt;

    /**
     * Entity constructor.
     * @param StorageServiceInterface $store
     * @param LogServiceInterface $log
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
     */
    public function __construct($store, $log, $dispatcher)
    {
        $this->setCommonDependencies($store, $log, $dispatcher);
    }

    /**
     * @return int the userId
     */
    public function getId(): int
    {
        return $this->userId;
    }

    /**
     * @return int the owner UserId (always 1)
     */
    public function getOwnerId(): int
    {
        return 1;
    }
}
