<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add additional columns to required file so that we can handle dependencies separately to media
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class RequiredfileDependencyMigration extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('requiredfile');
        $table
            ->addColumn('fileType', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null
            ])
            ->addColumn('realId', 'string', [
                'limit' => 254,
                'null' => true,
                'default' => null
            ])
            ->save();

        $this->table('bandwidthtype')
            ->insert([
                [
                    'bandwidthTypeId' => 12,
                    'name' => 'Get Data'
                ],
                [
                    'bandwidthTypeId' => 13,
                    'name' => 'Get Dependency'
                ],
            ])
            ->save();
    }
}
