<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Update playlist timeline help link
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class UpdatePlayListTimelineHelpLinkMigration extends AbstractMigration
{
    public function change()
    {
        $this->execute('UPDATE `help` SET `topic` = \'Media\', `category` = \'Playlists\', `link` = \'media_playlists.html\'
              WHERE `topic` = \'Layout\' AND `category` = \'RegionOptions\' ');
    }
}
