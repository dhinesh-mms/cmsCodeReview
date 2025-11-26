<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

class AddMcaasScopeAndRouteMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {
        // Just in case, check if the mcaas scope id exists, if not add it.
        if (!$this->fetchRow('SELECT * FROM `oauth_scopes` WHERE id = \'mcaas\'')) {
            $this->table('oauth_scopes')
                ->insert([
                    'id' => 'mcaas',
                    'description' => 'Media Conversion as a Service'
                ])
                ->save();
        }

        // clear existing scope routes for mcaas, to make the table clean
        $this->execute('DELETE FROM oauth_scope_routes WHERE scopeId = \'mcaas\'');

        // add mcaas scope routes with slim4 pattern
        $this->table('oauth_scope_routes')
            ->insert([
                ['scopeId' => 'mcaas', 'route' => '/', 'method' => 'GET'],
                ['scopeId' => 'mcaas', 'route' => '/library/download/{id}[/{type}]', 'method' => 'GET'],
                ['scopeId' => 'mcaas', 'route' => '/library/mcaas/{id}', 'method' => 'POST'],
            ])
            ->save();
    }
}
