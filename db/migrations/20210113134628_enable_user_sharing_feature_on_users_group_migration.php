<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class EnableUserSharingFeatureOnUsersGroupMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {
        // get current set of features assigned to Users user group
        $features = json_decode($this->fetchRow('SELECT features FROM `group` WHERE `group` = \'Users\' ')[0]);

        // add the feature to share content
        $features[] = 'user.sharing';

        $this->execute('UPDATE `group` SET features = \'' . json_encode($features) . '\' WHERE `group` = \'Users\' ');
    }
}
