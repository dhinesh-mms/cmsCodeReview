<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class AddSavedReportSchemaVersionMigration
 */
class AddSavedReportSchemaVersionMigration extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function change()
    {
        $table = $this->table('saved_report');
        $table
            ->addColumn('schemaVersion', 'integer', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY, 'default' => 1])
            ->save();
    }
}

