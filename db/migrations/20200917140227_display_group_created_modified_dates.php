<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Class DisplayGroupCreatedModifiedDates
 */
class DisplayGroupCreatedModifiedDates extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function change()
    {
        $table = $this->table('displaygroup');
        $table
            ->addColumn('createdDt', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('modifiedDt', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
