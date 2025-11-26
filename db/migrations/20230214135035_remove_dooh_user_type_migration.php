<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Remove Dooh User Type and User showContentFrom
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class RemoveDoohUserTypeMigration extends AbstractMigration
{
    public function change()
    {
        // Update all DOOH users to super admins
        $this->execute('UPDATE `user` SET userTypeId = 1 WHERE userTypeId = 4');

        $this->execute('DELETE FROM `usertype` WHERE `userType` = \'DOOH\' ');

        $userTable = $this->table('user');
        if ($userTable->hasColumn('showContentFrom')) {
            $userTable
                ->removeColumn('showContentFrom')
                ->save();
        }
    }
}
