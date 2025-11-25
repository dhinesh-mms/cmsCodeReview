<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class MenuBoardsMigration extends AbstractMigration
{
    /** @inheritDoc */
    public function change()
    {

        // Create menu board table
        $this->table('menu_board', ['id' => 'menuId'])
            ->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('description', 'string', ['limit' => 254, 'default' => null, 'null' => true])
            ->addColumn('userId', 'integer')
            ->addColumn('modifiedDt', 'integer', ['default' => 0])
            ->addColumn('folderId', 'integer', ['default' => 1])
            ->addColumn('permissionsFolderId', 'integer', ['default' => 1])
            ->addForeignKey('folderId', 'folder', 'folderId')
            ->addForeignKey('userId', 'user', 'userId')
            ->save();

        $this->table('menu_category', ['id' => 'menuCategoryId'])
            ->addColumn('menuId', 'integer')
            ->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('mediaId', 'integer', ['default' => null, 'null' => true])
            ->addForeignKey('menuId', 'menu_board', 'menuId')
            ->addForeignKey('mediaId', 'media', 'mediaId')
            ->save();

        $this->table('menu_product', ['id' => 'menuProductId'])
            ->addColumn('menuCategoryId', 'integer')
            ->addColumn('menuId', 'integer')
            ->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('price', 'string')
            ->addColumn('description', 'string', ['limit' => 254, 'default' => null, 'null' => true])
            ->addColumn('mediaId', 'integer', ['default' => null, 'null' => true])
            ->addColumn('availability', 'integer', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_TINY])
            ->addColumn('allergyInfo', 'string', ['limit' => 254, 'default' => null, 'null' => true])
            ->addForeignKey('menuId', 'menu_board', 'menuId')
            ->addForeignKey('menuCategoryId', 'menu_category', 'menuCategoryId')
            ->addForeignKey('mediaId', 'media', 'mediaId')
            ->save();

        $this->table('menu_product_options', ['id' => false, 'primary_key' => ['menuProductId', 'option']])
            ->addColumn('menuProductId', 'integer')
            ->addColumn('option', 'string', ['limit' => 254])
            ->addColumn('value', 'text', ['null' => true])
            ->addForeignKey('menuProductId', 'menu_product', 'menuProductId')
            ->save();

        $this->table('permissionentity')
            ->insert([
                ['entity' => 'Xibo\Entity\MenuBoard']
            ])
            ->save();

        if (!$this->fetchRow('SELECT * FROM module WHERE module = \'menuboard\'')) {
            // Add disabled for now - feature preview.
            $this->table('module')->insert([
                'module' => 'menuboard',
                'name' => 'Menu Board',
                'enabled' => 0,
                'regionSpecific' => 1,
                'description' => 'Module for displaying Menu Boards',
                'schemaVersion' => 1,
                'validExtensions' => '',
                'previewEnabled' => 1,
                'assignable' => 1,
                'render_as' => 'html',
                'viewPath' => '../modules',
                'class' => 'Xibo\Widget\MenuBoard',
                'defaultDuration' => 60,
                'installName' => 'menuboard'
            ])->save();
        }
    }
}
