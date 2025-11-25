<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add a new connector (Open Weather Map) to connectors table
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddOpenWeatherMapConnectorMigration extends AbstractMigration
{
    public function change()
    {
        $this->table('connectors')
            ->insert([
                'className' => '\\Xibo\\Connector\\OpenWeatherMapConnector',
                'isEnabled' => 0,
                'isVisible' => 1
            ])
            ->save();
    }
}
