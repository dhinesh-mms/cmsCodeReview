<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class CreateActionTableMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        // Create table
        $table = $this->table('action', ['id' => 'actionId']);
        $table
            ->addColumn('ownerId', 'integer')
            ->addColumn('triggerType', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('triggerCode', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('actionType', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('source', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('sourceId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('target', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('targetId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('widgetId', 'integer', ['null' => true, 'default' => null])
            ->addColumn('layoutCode', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addForeignKey('ownerId', 'user', 'userId')
            ->save();
    }
}
