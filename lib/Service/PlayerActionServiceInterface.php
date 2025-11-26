<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Service;


use Xibo\Entity\Display;
use Xibo\Support\Exception\GeneralException;
use Xibo\XMR\PlayerAction;

/**
 * Interface PlayerActionServiceInterface
 * @package Xibo\Service
 */
interface PlayerActionServiceInterface
{
    /**
     * PlayerActionHelper constructor.
     * @param ConfigServiceInterface
     * @param LogServiceInterface
     * @param bool
     */
    public function __construct($config, $log, $triggerPlayerActions);

    /**
     * @param Display[]|Display $displays
     * @param PlayerAction $action
     * @throws GeneralException
     */
    public function sendAction($displays, $action);

    /**
     * Get the queue
     */
    public function getQueue(): array;

    /**
     * Process the Queue of Actions
     * @throws GeneralException
     */
    public function processQueue();
}