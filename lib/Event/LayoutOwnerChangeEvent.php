<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

class LayoutOwnerChangeEvent extends Event
{
    public static $NAME = 'layout.owner.change.event';

    /** @var int */
    private $campaignId;

    /** @var int */
    private $ownerId;

    /**
     * LayoutOwnerChangeEvent constructor.
     * @param $campaignId
     */
    public function __construct($campaignId, $ownerId)
    {
        $this->campaignId = $campaignId;
        $this->ownerId = $ownerId;
    }

    /**
     * @return int
     */
    public function getCampaignId() : int
    {
        return $this->campaignId;
    }

    public function getOwnerId() : int
    {
        return $this->ownerId;
    }
}
