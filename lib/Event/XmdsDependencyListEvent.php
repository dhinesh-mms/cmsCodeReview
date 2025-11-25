<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Event;

use Xibo\Entity\Display;
use Xibo\Xmds\Entity\Dependency;

/**
 * A dependency list event
 */
class XmdsDependencyListEvent extends Event
{
    private static $NAME = 'xmds.dependency.list';

    private $dependencies = [];

    /** @var \Xibo\Entity\Display */
    private $display;

    public function __construct(Display $display)
    {
        $this->display = $display;
    }

    /**
     * @return Dependency[]
     */
    public function getDependencies(): array
    {
        return $this->dependencies;
    }

    /**
     * Add a dependency to the list.
     * @param string $fileType
     * @param int $id
     * @param string $path
     * @param int $size
     * @param string $md5
     * @param bool $isAvailableOverHttp
     * @param int $legacyId
     * @return $this
     */
    public function addDependency(
        string $fileType,
        int $id,
        string $path,
        int $size,
        string $md5,
        bool $isAvailableOverHttp,
        int $legacyId
    ): XmdsDependencyListEvent {
        $this->dependencies[] = new Dependency($fileType, $id, $legacyId, $path, $size, $md5, $isAvailableOverHttp);
        return $this;
    }

    /**
     * Get the display which raised this event
     * @return \Xibo\Entity\Display
     */
    public function getDisplay(): Display
    {
        return $this->display;
    }
}
