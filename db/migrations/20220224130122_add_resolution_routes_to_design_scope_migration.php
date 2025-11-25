<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Add Resolution Routes to the Design scope
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class AddResolutionRoutesToDesignScopeMigration extends AbstractMigration
{
    public function change()
    {
        $this->execute('UPDATE `oauth_scopes` SET `description` = \'Full account access\' WHERE `id` = \'all\';');
        $this->execute('UPDATE `oauth_scopes` SET `description` = \'Access to Library, Layouts, Playlists, Widgets and Resolutions\' WHERE `id` = \'design\';');
        $this->execute('UPDATE `oauth_scopes` SET `description` = \'Access to deleting content from Library, Layouts, Playlists, Widgets and Resolutions\' WHERE `id` = \'designDelete\';');

        $this->table('oauth_scope_routes')
            ->insert([
                ['scopeId' => 'design', 'route' => '/resolution', 'method' => 'GET,POST,PUT'],
                ['scopeId' => 'designDelete', 'route' => '/resolution', 'method' => 'DELETE'],
            ])
            ->save();
    }
}
