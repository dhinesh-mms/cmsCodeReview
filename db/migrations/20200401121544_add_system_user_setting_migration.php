<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class AddSystemUserSettingMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        if (!$this->fetchRow('SELECT * FROM `setting` WHERE setting = \'SYSTEM_USER\'')) {

            // get System User
            $getSystemUserQuery = $this->query('SELECT userId FROM user WHERE userTypeId = 1 ORDER BY userId LIMIT 1');
            $getSystemUserResult = $getSystemUserQuery->fetchAll(PDO::FETCH_ASSOC);

            // if for some reason there are no super admin Users in the CMS, ensure that migration does not fail.
            if (count($getSystemUserResult) >= 1) {
                $userId = $getSystemUserResult[0]['userId'];

                $this->table('setting')->insert([
                    [
                        'setting' => 'SYSTEM_USER',
                        'value' => $userId,
                        'userSee' => 1,
                        'userChange' => 1
                    ]
                ])->save();
            }
        }
    }
}
