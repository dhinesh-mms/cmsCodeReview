<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Widget\DataType;

use Xibo\Widget\Definition\DataType;

/**
 * A class representation of a data type.
 */
interface DataTypeInterface
{
    /**
     * Return the definition
     * @return \Xibo\Widget\Definition\DataType
     */
    public function getDefinition(): DataType;
}
