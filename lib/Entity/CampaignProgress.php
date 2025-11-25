<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

/**
 * Campaign Progress
 */
class CampaignProgress implements \JsonSerializable
{
    /** @var int */
    public $daysIn = 0;

    /** @var int */
    public $daysTotal = 0;

    /** @var float */
    public $targetPerDay = 0.0;

    /** @var float */
    public $progressTime = 0.0;

    /** @var float */
    public $progressTarget = 0.0;

    /** @inheritDoc */
    public function jsonSerialize(): array
    {
        return [
            'daysIn' => $this->daysIn,
            'daysTotal' => $this->daysTotal,
            'targetPerDay' => $this->targetPerDay,
            'progressTime' => $this->progressTime,
            'progressTarget' => $this->progressTarget,
        ];
    }
}
