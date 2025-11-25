<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class RemoveOldScreenshotsMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {
        // add the task
        $table = $this->table('task');
        $table->insert([
            [
                'name' => 'Remove Old Screenshots',
                'class' => '\Xibo\XTR\RemoveOldScreenshotsTask',
                'options' => '[]',
                'schedule' => '0 0 * * * *',
                'isActive' => '1',
                'configFile' => '/tasks/remove-old-screenshots.task'
            ],
        ])->save();

        // Add the ttl setting
        if (!$this->fetchRow('SELECT * FROM `setting` WHERE setting = \'DISPLAY_SCREENSHOT_TTL\'')) {
            $this->table('setting')->insert([
                [
                    'setting' => 'DISPLAY_SCREENSHOT_TTL',
                    'value' => 0,
                    'userSee' => 1,
                    'userChange' => 1
                ]
            ])->save();
        }
    }
}
