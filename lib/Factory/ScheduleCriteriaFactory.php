<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Factory;

use Xibo\Entity\ScheduleCriteria;

/**
 * Factory to return schedule criteria entities
 */
class ScheduleCriteriaFactory extends BaseFactory
{
    public function createEmpty(): ScheduleCriteria
    {
        return new ScheduleCriteria($this->getStore(), $this->getLog(), $this->getDispatcher());
    }

    /**
     * Get all criteria for an event
     * @param int $eventId
     * @return ScheduleCriteria[]
     */
    public function getByEventId(int $eventId): array
    {
        $entries = [];

        foreach ($this->getStore()->select('SELECT * FROM `schedule_criteria` WHERE `eventId` = :eventId', [
            'eventId' => $eventId,
        ]) as $row) {
            // Create and hydrate
            $entries[] = $this->createEmpty()->hydrate($row);
        }
        return $entries;
    }
}
