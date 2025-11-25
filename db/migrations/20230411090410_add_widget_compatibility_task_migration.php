<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;


/**
 * Add widget compatibility task
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddWidgetCompatibilityTaskMigration extends AbstractMigration
{
    public function change()
    {

        // Add a task for widget upgrade from v3 to v4
        $this->table('task')
            ->insert([
                'name' => 'Widget Compatibility',
                'class' => '\Xibo\XTR\WidgetCompatibilityTask',
                'options' => '[]',
                'schedule' => '* * * * * *',
                'isActive' => '1',
                'configFile' => '/tasks/widget-compatibility.task',
                'pid' => 0,
                'lastRunDt' => 0,
                'lastRunDuration' => 0,
                'lastRunExitCode' => 0
            ])
            ->save();
    }
}
