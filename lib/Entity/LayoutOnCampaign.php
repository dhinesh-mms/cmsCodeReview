<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Entity;

/**
 * @SWG\Definition("Layout linked to a Campaign")
 */
class LayoutOnCampaign implements \JsonSerializable
{
    use EntityTrait;

    public $lkCampaignLayoutId;
    public $campaignId;
    public $layoutId;
    public $displayOrder;

    public $dayPartId;
    public $daysOfWeek;
    public $geoFence;

    /**
     * @SWG\Property(description="The Layout name (readonly)")
     * @var string
     */
    public $layout;

    /**
     * @SWG\Property(description="The Layout campaignId (readonly)")
     * @var string
     */
    public $layoutCampaignId;

    /**
     * @SWG\Property(description="The owner id (readonly))")
     * @var integer
     */
    public $ownerId;

    /**
     * @SWG\Property(description="The duration (readonly))")
     * @var integer
     */
    public $duration;

    /**
     * @SWG\Property(description="The dayPart (readonly)")
     * @var string
     */
    public $dayPart;
}
