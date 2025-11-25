<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add the new display_media which will represent the link between module
 * files and the displays they should be served to
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class DisplayMediaMigration extends AbstractMigration
{
    public function change()
    {
        // Link Media to Display
        $table = $this->table('display_media');
        $table
            ->addColumn('displayId', 'integer')
            ->addColumn('mediaId', 'integer')
            ->addColumn('modifiedAt', 'timestamp', [
                'null' => true,
                'default' => null,
                'update' => 'CURRENT_TIMESTAMP'
            ])
            ->addIndex(['displayId', 'mediaId'], ['unique' => true])
            ->addForeignKey('displayId', 'display', 'displayId')
            ->addForeignKey('mediaId', 'media', 'mediaId')
            ->save();
    }
}
