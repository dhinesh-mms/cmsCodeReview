<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class AddCodeColumnToLayoutMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $layoutTable = $this->table('layout');

        if (!$layoutTable->hasColumn('code')) {
            $layoutTable
                ->addColumn('code', 'string', ['limit' => 50, 'null' => true, 'default' => null])
                ->save();
        }
    }
}
