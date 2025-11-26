<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

use Xibo\Entity\Playlist;

class PlaylistDeleteEvent extends Event
{
    public static $NAME = 'playlist.delete.event';

    /** @var Playlist */
    private $playlist;

    /**
     * PlaylistDeleteEvent constructor.
     * @param $playlist
     */
    public function __construct(Playlist $playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * @return Playlist
     */
    public function getPlaylist() : Playlist
    {
        return $this->playlist;
    }
}
