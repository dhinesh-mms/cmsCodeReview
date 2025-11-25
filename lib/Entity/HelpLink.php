<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

/**
 * A simple help link, used by the help service.
 */
class HelpLink implements \JsonSerializable
{
    public $title;
    public $summary;
    public $url;
    public $isAllowWhitelabel;

    /**
     * @param $array
     */
    public function __construct($array)
    {
        $this->title = $array['title'] ?? '';
        $this->summary = $array['summary'] ?? '';
        $this->url = $array['url'] ?? '';
        $this->isAllowWhitelabel = $array['isAllowWhitelabel'] ?? true;
    }

    public function jsonSerialize(): array
    {
        return [
            'title' => $this->title,
            'summary' => $this->summary,
            'url' => $this->url,
            'isAllowWhitelabel' => $this->isAllowWhitelabel,
        ];
    }
}
