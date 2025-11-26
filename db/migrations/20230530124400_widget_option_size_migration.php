<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Content Sync changes
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class WidgetOptionSizeMigration extends AbstractMigration
{
    public function change(): void
    {
        // Use DDL because phinx doesn't want to change the datatype without truncating data.
        $this->execute('ALTER TABLE `widgetoption` MODIFY `value` MEDIUMTEXT NULL');
    }
}
