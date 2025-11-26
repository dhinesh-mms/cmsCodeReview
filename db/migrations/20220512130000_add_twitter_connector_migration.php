<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add a new column to connectors table (isVisible)
 * Add a new connector (layoutExchange) to connectors table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddTwitterConnectorMigration extends AbstractMigration
{
    public function change()
    {
        /*$this->table('connectors')
            ->insert([
                'className' => '\\Xibo\\Connector\\TwitterConnector',
                'isEnabled' => 0,
                'isVisible' => 1
            ])
            ->save();*/
    }
}
