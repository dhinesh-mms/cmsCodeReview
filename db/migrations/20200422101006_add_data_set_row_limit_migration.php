<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

class AddDataSetRowLimitMigration extends AbstractMigration
{
    /** @inheritdoc */
    public function change()
    {
        // add the CMS Setting for hard limit on DataSet size.
        if (!$this->fetchRow('SELECT * FROM `setting` WHERE setting = \'DATASET_HARD_ROW_LIMIT\'')) {

            $this->table('setting')->insert([
                [
                    'setting' => 'DATASET_HARD_ROW_LIMIT',
                    'value' => 10000,
                    'userSee' => 1,
                    'userChange' => 1
                ]
            ])->save();
        }

        // add two new columns to DataSet table, soft limit on DataSet size and policy on what to do when the limit is hit (stop|fifo)
        $dataSetTable = $this->table('dataset');

        if (!$dataSetTable->hasColumn('rowLimit')) {
            $dataSetTable
                ->addColumn('rowLimit', 'integer', ['null' => true, 'default' => null])
                ->addColumn('limitPolicy', 'string', ['limit' => 50, 'default' => null, 'null' => true])
                ->save();
        }
    }
}
