<?php
/**
 * Oasys Digital Signage
 */



namespace Xibo\Entity;
use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;

/**
 * Class AuditLog
 * @package Xibo\Entity
 *
 * @SWG\Definition()
 */
class AuditLog implements \JsonSerializable
{
    use EntityTrait;

    /**
     * @SWG\Property(description="The Log Id")
     * @var int
     */
    public $logId;

    /**
     * @SWG\Property(description="The Log Date")
     * @var int
     */
    public $logDate;

    /**
     * @SWG\Property(description="The userId of the User that took this action")
     * @var int
     */
    public $userId;

    /**
     * @SWG\Property(description="Message describing the action taken")
     * @var string
     */
    public $message;

    /**
     * @SWG\Property(description="The effected entity")
     * @var string
     */
    public $entity;

    /**
     * @SWG\Property(description="The effected entityId")
     * @var int
     */
    public $entityId;

    /**
     * @SWG\Property(description="A JSON representation of the object after it was changed")
     * @var string
     */
    public $objectAfter;

    /**
     * @SWG\Property(description="The User Name of the User that took this action")
     * @var string
     */
    public $userName;

    /**
     * @SWG\Property(description="The IP Address of the User that took this action")
     * @var string
     */
    public $ipAddress;

    /**
     * @SWG\Property(description="Session history id.")
     * @var int
     */
    public $sessionHistoryId;

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
}
