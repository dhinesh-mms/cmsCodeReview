<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add schemaVersion to the widget table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddSchemaVersionWidgetMigration extends AbstractMigration
{
    public function change()
    {    
        $widget = $this->table('widget');
        $widget
            ->addColumn('schemaVersion', 'integer', [ 'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY, 'default' => 1])
            ->save();
    }
}
