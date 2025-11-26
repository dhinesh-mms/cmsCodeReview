<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

use Xibo\Entity\User;

class UserDeleteEvent extends Event
{
    public static $NAME = 'user.delete.event';

    /** @var User */
    private $user;

    /** @var User */
    private $newUser;

    /** @var string */
    private $function;

    /** @var User */
    private $systemUser;

    public $returnValue;

    /**
     * UserDeleteEvent constructor.
     * @param $user
     * @param $function
     */
    public function __construct($user, $function, $systemUser = null, $newUser = null)
    {
        $this->user = $user;
        $this->newUser = $newUser;
        $this->systemUser = $systemUser;
        $this->function = $function;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }

    public function getNewUser()
    {
        return $this->newUser;
    }

    public function getSystemUser() : User
    {
        return $this->systemUser;
    }

    public function getFunction(): string
    {
        return $this->function;
    }

    public function setReturnValue($returnValue)
    {
        $this->returnValue = $returnValue;
    }

    public function getReturnValue()
    {
        return $this->returnValue;
    }
}
