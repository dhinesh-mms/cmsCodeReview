<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Service;

use Xibo\Service\LogServiceInterface;

/**
 * Interface ImageProcessingServiceInterface
 * @package Xibo\Service
 */
interface ImageProcessingServiceInterface
{
    /**
     * Image Processing constructor.
     */
    public function __construct();

    /**
     * Set Image Processing Dependencies
     * @param LogServiceInterface $logger
     */
    public function setDependencies($logger);

    /**
     * Resize Image
     * @param $filePath string
     * @param $width int
     * @param $height int
     */
    public function resizeImage($filePath, $width, $height);
}