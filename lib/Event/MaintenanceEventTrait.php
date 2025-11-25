<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

trait MaintenanceEventTrait
{
    private $messages = [];

    /**
     * Add a message to be recorded in the run log
     * @param string $message
     * @return \Xibo\Event\Event|\Xibo\Event\MaintenanceEventTrait
     */
    public function addMessage(string $message)
    {
        $this->messages[] = $message;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
