<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;

class ApplicationRequest implements \JsonSerializable
{
    use EntityTrait;

    /**
     * @SWG\Property(description="The request ID")
     * @var int
     */
    public $requestId;

    /**
     * @SWG\Property(description="The user ID")
     * @var int
     */
    public $userId;

    /**
     * @SWG\Property(description="The application ID")
     * @var string
     */
    public $applicationId;

    /**
     * @SWG\Property(description="The request route")
     * @var string
     */
    public $url;

    /**
     * @SWG\Property(description="The request method")
     * @var string
     */
    public $method;

    /**
     * @SWG\Property(description="The request start time")
     * @var string
     */
    public $startTime;

    /**
     * @SWG\Property(description="The request end time")
     * @var string
     */
    public $endTime;

    /**
     * @SWG\Property(description="The request duration")
     * @var int
     */
    public $duration;

    /**
     * Entity constructor.
     * @param StorageServiceInterface $store
     * @param LogServiceInterface $log
     * @param EventDispatcherInterface $dispatcher
     */
    public function __construct(
        StorageServiceInterface $store,
        LogServiceInterface $log,
        EventDispatcherInterface $dispatcher
    ) {
        $this->setCommonDependencies($store, $log, $dispatcher);
    }
}
