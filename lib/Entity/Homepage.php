<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Entity;

/**
 * Class Homepage
 * @package Xibo\Entity
 */
class Homepage implements \JsonSerializable
{
    use EntityTrait;

    public $homepage;
    public $feature;
    public $title;
    public $description;

    /**
     * Homepage constructor.
     * @param $homepage
     * @param $feature
     * @param $title
     * @param $description
     */
    public function __construct($homepage, $feature, $title, $description)
    {
        $this->homepage = $homepage;
        $this->feature = $feature;
        $this->title = $title;
        $this->description = $description;
    }
}