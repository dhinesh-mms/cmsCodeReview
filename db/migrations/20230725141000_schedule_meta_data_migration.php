<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add meta data fields to schedule table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class ScheduleMetaDataMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('schedule')
            ->addColumn('modifiedBy', 'integer', [
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_REGULAR,
                'null' => true,
                'default' => null
            ])
            ->addColumn('createdOn', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('updatedOn', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('name', 'string', ['limit' => 50, 'null' => true])
            ->save();
    }
}
