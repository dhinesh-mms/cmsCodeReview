<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

/**
 * Add the new connectors table and first connector (pixabay)
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class ConnectorsMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('connectors', ['id' => 'connectorId']);
        $table
            ->addColumn('className', 'string', ['limit' => 254])
            ->addColumn('settings', 'text', [
                'limit' => MysqlAdapter::TEXT_REGULAR,
                'default' => null,
                'null' => true
            ])
            ->addColumn('isEnabled', 'integer', [
                'default' => 0,
                'null' => false,
                'limit' => MysqlAdapter::INT_TINY
            ])
            ->insert([
                'className' => '\\Xibo\\Connector\\PixabayConnector',
                'isEnabled' => 0
            ])
            ->save();
    }
}
