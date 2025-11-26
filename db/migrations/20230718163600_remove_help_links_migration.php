<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add Sync Key column to region table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class RemoveHelpLinksMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('help')->drop()->save();
    }
}
