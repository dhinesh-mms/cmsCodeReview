<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Entity;

/**
 * @SWG\Definition()
 */
class SearchResults implements \JsonSerializable
{
    public $data = [];

    public function jsonSerialize(): array
    {
        return [
            'data' => $this->data
        ];
    }
}
