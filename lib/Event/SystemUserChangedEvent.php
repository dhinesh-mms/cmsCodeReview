<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

use Xibo\Entity\User;

class SystemUserChangedEvent extends Event
{
    public static $NAME = 'system.user.change.event';
    /**
     * @var User
     */
    private $oldSystemUser;
    /**
     * @var User
     */
    private $newSystemUser;

    public function __construct(User $oldSystemUser, User $newSystemUser)
    {
        $this->oldSystemUser = $oldSystemUser;
        $this->newSystemUser = $newSystemUser;
    }

    public function getOldSystemUser() : User
    {
        return $this->oldSystemUser;
    }

    public function getNewSystemUser() : User
    {
        return $this->newSystemUser;
    }
}
