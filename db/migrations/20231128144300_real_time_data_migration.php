<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Migrations for new real-time data
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class RealTimeDataMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('dataset')
            ->addColumn('isRealTime', 'integer', [
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY,
                'default' => 0,
                'null' => false,
            ])
            ->save();

        $this->table('schedule')
            ->addColumn('dataSetId', 'integer', [
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_REGULAR,
                'default' => null,
                'null' => true
            ])
            ->addColumn('dataSetParams', 'text', [
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::TEXT_REGULAR,
                'default' => null,
                'null' => true
            ])
            ->addForeignKey('dataSetId', 'dataset', 'dataSetId')
            ->save();
    }
}
