<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class AddIsDrawerColumnMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $regionTable = $this->table('region');

        if (!$regionTable->hasColumn('isDrawer')) {
            $regionTable
                ->addColumn('isDrawer', 'integer', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY, 'null' => false, 'default' => 0])
                ->save();
        }
    }
}
