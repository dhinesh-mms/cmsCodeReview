<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

use phpDocumentor\Reflection\Types\Boolean;
use Xibo\Entity\Media;

class MediaDeleteEvent extends Event
{
    public static $NAME = 'library.media.delete.event';

    /** @var Media */
    private $media;
    /**
     * @var Media|null
     */
    private $parentMedia;

    /** @var Boolean */
    private $purge;

    /**
     * MediaDeleteEvent constructor.
     * @param $media
     */
    public function __construct($media, $parentMedia = null, $purge = false)
    {
        $this->media = $media;
        $this->parentMedia = $parentMedia;
        $this->purge = $purge;
    }

    /**
     * @return Media
     */
    public function getMedia() : Media
    {
        return $this->media;
    }

    public function getParentMedia()
    {
        return $this->parentMedia;
    }

    public function isSetToPurge()
    {
        return $this->purge;
    }
}
