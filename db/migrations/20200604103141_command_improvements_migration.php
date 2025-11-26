<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class CommandImprovementsMigration
 */
class CommandImprovementsMigration extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function change()
    {
        $table = $this->table('command');

        if (!$table->hasColumn('availableOn')) {
            $table
                ->addColumn('availableOn', 'string', ['default' => null, 'null' => true, 'limit' => 50])
                ->addColumn('commandString', 'string', ['default' => null, 'null' => true, 'limit' => 1000])
                ->addColumn('validationString', 'string', ['default' => null, 'null' => true, 'limit' => 1000])
                ->save();
        }
    }
}
