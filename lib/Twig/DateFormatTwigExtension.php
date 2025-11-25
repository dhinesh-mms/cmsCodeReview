<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Twig;

use Twig\Extension\AbstractExtension;

/**
 * Class DateFormatTwigExtension
 * @package Xibo\Twig
 */
class DateFormatTwigExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig\TwigFilter('datehms', [$this, 'dateFormat'])
        );
    }

    /**
     * Formats a date
     *
     * @param string $date in seconds
     *
     * @return string formated as HH:mm:ss
     */
    public function dateFormat($date)
    {
        return gmdate('H:i:s', $date);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'datehms';
    }
}
