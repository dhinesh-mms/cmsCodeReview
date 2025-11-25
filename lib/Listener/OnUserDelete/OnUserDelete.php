<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Listener\OnUserDelete;

use Xibo\Event\UserDeleteEvent;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class OnUserDelete
{
    use ListenerLoggerTrait;

    /** @var StorageServiceInterface */
    private $store;

    public function __construct(StorageServiceInterface $store)
    {
        $this->store = $store;
    }

    /**
     * @inheritDoc
     */
    public function __invoke(UserDeleteEvent $event)
    {
        $user = $event->getUser();
        $function = $event->getFunction();

        if ($function === 'delete' || $function === 'reassignAll') {
            $this->deleteChildren($user);
        }
    }

    // when we delete a User with or without reassign the session and oauth clients should always be removed
    // other objects that can be owned by the user are deleted in their respective listeners.
    private function deleteChildren($user)
    {
        // Delete oAuth clients
        $this->store->update('DELETE FROM `oauth_clients` WHERE userId = :userId', ['userId' => $user->userId]);

        $this->store->update('DELETE FROM `session` WHERE userId = :userId', ['userId' => $user->userId]);
    }
}
