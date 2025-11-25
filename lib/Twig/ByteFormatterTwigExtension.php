<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Twig;

use Twig\Extension\AbstractExtension;
use Xibo\Helper\ByteFormatter;

/**
 * Class ByteFormatterTwigExtension
 * @package Xibo\Twig
 */
class ByteFormatterTwigExtension extends AbstractExtension
{
    public function getName()
    {
        return 'byteFormatter';
    }

    public function getFilters()
    {
        return array(
            new \Twig\TwigFilter('byteFormat', array($this, 'byteFormat'))
        );
    }

    public function byteFormat($bytes)
    {
        return ByteFormatter::format($bytes);
    }
}