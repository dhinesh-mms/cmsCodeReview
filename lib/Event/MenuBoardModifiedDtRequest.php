<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

use Carbon\Carbon;

/**
 * Menu Board Product Request.
 */
class MenuBoardModifiedDtRequest extends Event
{
    public static $NAME = 'menuboard.modifiedDt.request.event';

    /** @var int */
    private $menuId;

    /** @var Carbon */
    private $modifiedDt;

    public function __construct(int $menuId)
    {
        $this->menuId = $menuId;
    }

    public function getDataSetId(): int
    {
        return $this->menuId;
    }

    public function setModifiedDt(Carbon $modifiedDt): MenuBoardModifiedDtRequest
    {
        $this->modifiedDt = $modifiedDt;
        return $this;
    }

    public function getModifiedDt(): ?Carbon
    {
        return $this->modifiedDt;
    }
}
