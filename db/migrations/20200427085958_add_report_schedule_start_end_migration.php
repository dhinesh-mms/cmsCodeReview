<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class AddReportScheduleStartEndMigration
 */
class AddReportScheduleStartEndMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $table = $this->table('reportschedule');
        $table
            ->addColumn('toDt', 'integer', ['default' => 0, 'after' => 'isActive'])
            ->addColumn('fromDt', 'integer', ['default' => 0, 'after' => 'isActive'])
            ->save();
    }
}