<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

use Phinx\Migration\AbstractMigration;

/**
 * Remove savedreport from media table
 * Add more columns to saved_report table
 * Adjust fileName of saved report
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class SavedReportMoveOutMigration extends AbstractMigration
{
    public function change()
    {
        // add some new columns
        $table = $this->table('saved_report');
        $table
            ->addColumn('fileName', 'string')
            ->addColumn('size', 'integer', ['limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_BIG, 'default' => null, 'null' => true])
            ->addColumn('md5', 'string', ['limit' => 32, 'default' => null, 'null' => true])
            ->save();

        // create savedreport sub-folder in the library location
        $libraryLocation = $this->fetchRow('
            SELECT `setting`.value
              FROM `setting`
             WHERE `setting`.setting = \'LIBRARY_LOCATION\'')[0] ?? null;

        // New installs won't have a library location yet (if they are non-docker).
        if (!empty($libraryLocation)) {
            if (!file_exists($libraryLocation . 'savedreport')) {
                mkdir($libraryLocation . 'savedreport', 0777, true);
            }

            // get all existing savedreport records in media table and convert them
            foreach ($this->fetchAll('SELECT mediaId, name, type, createdDt, modifiedDt, storedAs, md5, fileSize FROM `media` WHERE media.type = \'savedreport\'') as $savedreportMedia) {
                $this->execute('UPDATE `saved_report` SET fileName = \'' . $savedreportMedia['storedAs'] . '\',
                                    size = ' . $savedreportMedia['fileSize'] . ',
                                    md5 = \'' . $savedreportMedia['md5'] . '\'
                                WHERE `saved_report`.mediaId = ' . $savedreportMedia['mediaId']);

                // move the stored files with new id to savedreport folder
                rename($libraryLocation . $savedreportMedia['storedAs'], $libraryLocation . 'savedreport/' . $savedreportMedia['storedAs']);

                // remove any potential tagLinks from savedreport media files
                // unlikely that there will be any, but just in case.
                $this->execute('DELETE FROM `lktagmedia` WHERE `lktagmedia`.mediaId = ' . $savedreportMedia['mediaId']);
            }
        }

        // we are finally done
        if ($this->checkIndexExists('saved_report', 'saved_report_ibfk_1')) {
            $table->removeIndexByName('saved_report_ibfk_1');
        }

        // remove mediaId column and index/key
        $table
            ->dropForeignKey('mediaId')
            ->removeColumn('mediaId')
            ->save();

        // delete savedreport records from media table
        $this->execute('DELETE FROM `media` WHERE media.type = \'savedreport\'');
    }

    /**
     * Check if an index exists
     * @param string $table
     * @param $indexName
     * @return bool
     */
    private function checkIndexExists($table, $indexName): bool
    {
        // Use the information schema to see if the index exists or not.
        // all users have permission to the information schema
        $sql = '
          SELECT * 
            FROM INFORMATION_SCHEMA.STATISTICS 
           WHERE `table_schema` = DATABASE() 
            AND `table_name` = \'' . $table . '\' 
            AND `index_name` = \'' . $indexName . '\'';

        return count($this->fetchAll($sql)) > 0;
    }
}
