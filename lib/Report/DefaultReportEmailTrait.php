<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Report;

/**
 * Trait DefaultReportEmailTrait
 * @package Xibo\Report
 */
trait DefaultReportEmailTrait
{
    /** @inheritdoc */
    public function getReportEmailTemplate()
    {
        return 'default-email-template.twig';
    }
}
