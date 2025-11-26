<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

class RemoveOldPermissionSettingsMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        $this->execute('DELETE FROM `setting` WHERE setting = \'MEDIA_DEFAULT\';');
        $this->execute('DELETE FROM `setting` WHERE setting = \'LAYOUT_DEFAULT\';');
        $this->execute('DELETE FROM `setting` WHERE setting = \'INHERIT_PARENT_PERMISSIONS\';');
        $this->execute('DELETE FROM `setting` WHERE setting = \'DEFAULT_CASCADE_PERMISSION_CHECKB\';');
    }
}
