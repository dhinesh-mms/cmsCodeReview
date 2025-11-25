<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Listener\OnGettingDependencyFileSize;

use Xibo\Event\DependencyFileSizeEvent;
use Xibo\Factory\SavedReportFactory;

class SavedReportListener
{
    /**
     * @var SavedReportFactory
     */
    private $savedReportFactory;

    public function __construct(SavedReportFactory $savedReportFactory)
    {
        $this->savedReportFactory = $savedReportFactory;
    }

    public function __invoke(DependencyFileSizeEvent $event)
    {
        $versionSize = $this->savedReportFactory->getSizeAndCount();
        $event->addResult([
            'SumSize' => $versionSize['SumSize'],
            'type' => 'savedreport',
            'count' => $versionSize['totalCount']
        ]);
    }
}
