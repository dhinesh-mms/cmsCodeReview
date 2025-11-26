<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add Sync Key column to region table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddSyncKeyToZoneMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('region')
            ->addColumn('syncKey', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->save();
    }
}
