<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class AddPreviousRunDateReportScheduleMigration
 */
class ChangeStatTableStartEndColumnMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $this->table('stat')->rename('stat_archive')->save();
    }
}