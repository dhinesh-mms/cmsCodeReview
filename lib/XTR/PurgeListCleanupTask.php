<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\XTR;

use Carbon\Carbon;
use Xibo\Helper\DateFormatHelper;

class PurgeListCleanupTask implements TaskInterface
{
    use TaskTrait;

    /** @inheritdoc */
    public function setFactories($container)
    {
        $this->sanitizerService = $container->get('sanitizerService');
        $this->store = $container->get('store');
        $this->config = $container->get('configService');
        return $this;
    }

    /** @inheritdoc */
    public function run()
    {
        $this->tidyPurgeList();
    }

    public function tidyPurgeList()
    {
        $this->runMessage = '# ' . __('Purge List Cleanup Start') . PHP_EOL . PHP_EOL;

        $count = $this->store->update('DELETE FROM `purge_list` WHERE expiryDate < :expiryDate', [
            'expiryDate' => Carbon::now()->format(DateFormatHelper::getSystemFormat())
        ]);

        if ($count <= 0) {
            $this->appendRunMessage('# ' . __('Nothing to remove') . PHP_EOL . PHP_EOL);
        } else {
            $this->appendRunMessage('# ' . sprintf(__('Removed %d rows'), $count) . PHP_EOL . PHP_EOL);
        }
    }
}
