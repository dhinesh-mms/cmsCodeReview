<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

use Xibo\Entity\RequiredFile;

/**
 * Event raised when XMDS receives a request for a file.
 */
class XmdsDependencyRequestEvent extends Event
{
    public static $NAME = 'xmds.dependency.request';

    private $fileType;
    private $id;
    private $path;
    /**
     * @var string|null
     */
    private $realId;

    /**
     * @param RequiredFile $file
     */
    public function __construct(RequiredFile $file)
    {
        $this->fileType = $file->fileType;
        $this->id = $file->itemId;
        $this->realId = $file->realId;
    }

    /**
     * Get the relative path to this dependency, from the library folder forwards.
     * @param string $path
     * @return $this
     */
    public function setRelativePathToLibrary(string $path): XmdsDependencyRequestEvent
    {
        $this->path = $path;
        return $this;
    }

    public function getRelativePath(): ?string
    {
        return $this->path;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The Real ID of the dependency request
     *  this will always be the ID of the item (asset/font/etc.) regardless of XMDS schema version being used.
     * @return string
     */
    public function getRealId() : string
    {
        return $this->realId;
    }
}
