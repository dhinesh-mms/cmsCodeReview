<?php
/**
 * Oasys Digital Signage
 */

use Phinx\Migration\AbstractMigration;

/**
 * Migrations for schedule criteria
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */
class ScheduleCriteriaMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('schedule_criteria')
            ->addColumn('eventId', 'integer', [
                'limit' => \Phinx\Db\Adapter\MysqlAdapter::INT_REGULAR,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('metric', 'string', [
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('condition', 'string', [
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('value', 'string', [
                'limit' => 255,
                'null' => false,
            ])
            ->addForeignKey('eventId', 'schedule', 'eventId')
            ->save();
    }
}
