<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Update column type in display and campaign
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class UpdateCampaignDisplayColumnDataTypeMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {
        $display = $this->table('display');
        $display
            ->changeColumn('impressionsPerPlay', 'decimal', ['precision' => 10, 'scale' => 4, 'default' => null, 'null' => true])
            ->changeColumn('costPerPlay', 'decimal', ['precision' => 10, 'scale' => 4, 'default' => null, 'null' => true])
            ->save();

        $campaign = $this->table('campaign');
        $campaign
            ->changeColumn('spend', 'decimal', [
                'precision' => 30,
                'scale' => 4,
                'default' => 0,
            ])
            ->changeColumn('impressions', 'decimal', [
                'precision' => 30,
                'scale' => 4,
                'default' => 0,
            ])
            ->save();
    }
}
