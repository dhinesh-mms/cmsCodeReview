<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class ChangeInterruptLayoutMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $scheduleTable = $this->table('schedule');

        // Add a new column to Schedule table - shareOfVoice
        $scheduleTable
            ->changeColumn('shareOfVoice', 'integer', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_SMALL, 'default' => null, 'null' => true])
            ->save();
    }
}