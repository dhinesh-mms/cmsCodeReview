<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\XTR;


use Carbon\Carbon;
use Xibo\Factory\MediaFactory;

class RemoveOldScreenshotsTask implements TaskInterface
{
    use TaskTrait;

    /** @var MediaFactory */
    private $mediaFactory;

    /** @inheritdoc */
    public function setFactories($container)
    {
        $this->mediaFactory = $container->get('mediaFactory');

        return $this;
    }

    /** @inheritdoc */
    public function run()
    {
        $this->runMessage = '# ' . __('Remove Old Screenshots') . PHP_EOL . PHP_EOL;

        $screenshotLocation = $this->config->getSetting('LIBRARY_LOCATION') . 'screenshots/';
        $screenshotTTL = $this->config->getSetting('DISPLAY_SCREENSHOT_TTL');
        $count = 0;

        if ($screenshotTTL > 0) {
            foreach (array_diff(scandir($screenshotLocation), ['..', '.']) as $file) {
                $fileLocation = $screenshotLocation . $file;

                $lastModified = Carbon::createFromTimestamp(filemtime($fileLocation));
                $now = Carbon::now();
                $diff = $now->diffInDays($lastModified);

                if ($diff > $screenshotTTL) {
                    unlink($fileLocation);
                    $count++;

                    $this->log->debug('Removed old Display screenshot:' . $file);
                }
            }
            $this->appendRunMessage(sprintf(__('Removed %d old Display screenshots'), $count));
        } else {
            $this->appendRunMessage(__('Display Screenshot Time to keep set to 0, nothing to remove.'));
        }
    }
}