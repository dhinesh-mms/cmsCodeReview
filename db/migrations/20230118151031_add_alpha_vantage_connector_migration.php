<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add a new connector (AlphaVantage) to connectors table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddAlphaVantageConnectorMigration extends AbstractMigration
{
    public function change()
    {
        $this->table('connectors')
            ->insert([
                'className' => '\\Xibo\\Connector\\AlphaVantageConnector',
                'isEnabled' => 0,
                'isVisible' => 1
            ])
            ->save();
    }
}
