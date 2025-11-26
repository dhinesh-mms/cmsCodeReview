<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\XTR;
use Psr\Container\ContainerInterface;
use Stash\Interfaces\PoolInterface;
use Xibo\Entity\Task;
use Xibo\Entity\User;
use Xibo\Service\ConfigServiceInterface;
use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;
use Xibo\Storage\TimeSeriesStoreInterface;
use Xibo\Support\Sanitizer\SanitizerInterface;

/**
 * Interface TaskInterface
 * @package Xibo\XTR
 */
interface TaskInterface
{
    /**
     * Set the app options
     * @param ConfigServiceInterface $config
     * @return $this
     */
    public function setConfig($config);

    /**
     * @param LogServiceInterface $logger
     * @return $this
     */
    public function setLogger($logger);

    /**
     * @param SanitizerInterface $sanitizer
     * @return $this
     */
    public function setSanitizer($sanitizer);

    /**
     * @param $array
     * @return SanitizerInterface
     */
    public function getSanitizer($array);

    /**
     * Set the task
     * @param Task $task
     * @return $this
     */
    public function setTask($task);

    /**
     * @param StorageServiceInterface $store
     * @return $this
     */
    public function setStore($store);

    /**
     * @param TimeSeriesStoreInterface $timeSeriesStore
     * @return $this
     */
    public function setTimeSeriesStore($timeSeriesStore);

    /**
     * @param PoolInterface $pool
     * @return $this
     */
    public function setPool($pool);

    /**
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
     * @return $this
     */
    public function setDispatcher($dispatcher);

    /**
     * @param User $user
     * @return $this
     */
    public function setUser($user);

    /**
     * @param ContainerInterface $container
     * @return $this
     */
    public function setFactories($container);

    /**
     * @return $this
     */
    public function run();

    /**
     * Get the run message
     * @return string
     */
    public function getRunMessage();
}