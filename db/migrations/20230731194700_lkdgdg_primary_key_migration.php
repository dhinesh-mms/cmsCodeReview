<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * lkdgdg must have a primary key for MySQL8 clustering
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class LkdgdgPrimaryKeyMigration extends AbstractMigration
{
    public function change(): void
    {
        $pk = $this->fetchAll('SHOW KEYS FROM `lkdgdg` WHERE `Key_name` = \'PRIMARY\'');
        if (count($pk) <= 0) {
            $this->execute('ALTER TABLE `lkdgdg` ADD COLUMN `id` INT(11) PRIMARY KEY AUTO_INCREMENT');
        }
    }
}
