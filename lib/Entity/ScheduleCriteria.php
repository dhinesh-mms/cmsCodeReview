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
use Xibo\Support\Exception\InvalidArgumentException;
use Xibo\Support\Exception\NotFoundException;

/**
 * Schedule Criteria entity
 * @SWG\Definition()
 */
class ScheduleCriteria implements \JsonSerializable
{
    use EntityTrait;

    public int $id;
    public int $eventId;
    public string $type;
    public string $metric;
    public string $condition;
    public string $value;

    public function __construct(
        StorageServiceInterface $store,
        LogServiceInterface $logService,
        EventDispatcherInterface $dispatcher
    ) {
        $this->setCommonDependencies($store, $logService, $dispatcher);
    }

    /**
     * Basic checks to make sure we have all the fields, etc that we need/
     * @return void
     * @throws InvalidArgumentException
     */
    private function validate(): void
    {
        if (empty($this->eventId)) {
            throw new InvalidArgumentException(__('Criteria must be attached to an event'), 'eventId');
        }

        if (empty($this->metric)) {
            throw new InvalidArgumentException(__('Please select a metric'), 'metric');
        }

        if (!in_array($this->condition, ['set', 'lt', 'lte', 'eq', 'neq', 'gt', 'gte', 'contains', 'ncontains'])) {
            throw new InvalidArgumentException(__('Please enter a valid condition'), 'condition');
        }
    }

    /**
     * @throws NotFoundException|InvalidArgumentException
     */
    public function save(array $options = []): ScheduleCriteria
    {
        $options = array_merge([
            'validate' => true,
            'audit' => true,
        ], $options);

        // Validate?
        if ($options['validate']) {
            $this->validate();
        }

        if (empty($this->id)) {
            $this->add();
        } else {
            $this->edit();
        }

        if ($options['audit']) {
            $this->audit($this->id, 'Saved schedule criteria to event', null, true);
        }

        return $this;
    }

    /**
     * Delete this criteria
     * @return void
     */
    public function delete(): void
    {
        $this->getStore()->update('DELETE FROM `schedule_criteria` WHERE `id` = :id', ['id' => $this->id]);
    }

    private function add(): void
    {
        $this->id = $this->getStore()->insert('
            INSERT INTO `schedule_criteria` (`eventId`, `type`, `metric`, `condition`, `value`)
            VALUES (:eventId, :type, :metric, :condition, :value)
        ', [
            'eventId' => $this->eventId,
            'type' => $this->type,
            'metric' => $this->metric,
            'condition' => $this->condition,
            'value' => $this->value,
        ]);
    }

    private function edit(): void
    {
        $this->getStore()->update('
            UPDATE `schedule_criteria` SET
                `eventId` = :eventId,
                `type` = :type,
                `metric` = :metric,
                `condition` = :condition,
                `value` = :value
             WHERE `id` = :id
        ', [
            'eventId' => $this->eventId,
            'type' => $this->type,
            'metric' => $this->metric,
            'condition' => $this->condition,
            'value' => $this->value,
            'id' => $this->id,
        ]);
    }
}
