<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

/**
* Class ReportForm
* @package Xibo\Entity
*
*/
class ReportForm
{
    /**
     * On demand report form template
     * @var string
     */
    public $template;

    /**
     * Report name is the string that is defined in .report file
     * @var string
     */
    public $reportName;

    /**
     * Report category is the string that is defined in .report file
     * @var string|null
     */
    public $reportCategory;

    /**
     * The defaults that is used in report form twig file
     * @var array
     */
    public $defaults;

    /**
     * The string that is displayed when we popover the Schedule button
     * @var string
     */
    public $reportAddBtnTitle;

    /**
     * ReportForm constructor.
     * @param string $template
     * @param string $reportName
     * @param string $reportCategory
     * @param array $defaults
     * @param string|null $reportAddBtnTitle
     */
    public function __construct(
        string $template,
        string $reportName,
        string $reportCategory,
        array $defaults = [],
        string $reportAddBtnTitle = 'Schedule'
    ) {
        $this->template = $template;
        $this->reportName = $reportName;
        $this->reportCategory = $reportCategory;
        $this->defaults = $defaults;
        $this->reportAddBtnTitle = $reportAddBtnTitle;

        return $this;
    }
}
