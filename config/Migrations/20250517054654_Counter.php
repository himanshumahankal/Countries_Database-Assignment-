<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class Counter extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('countries');
        $table
            ->addColumn('name', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('currency', 'string', ['limit' => 10, 'null' => false])
            ->addColumn('unicode_flag', 'string', ['limit' => 10, 'null' => false])
            ->addColumn('flag', 'string', ['limit' => 512, 'null' => true, 'default' => null])
            ->addColumn('dial_code', 'string', ['limit' => 10, 'null' => false])
            ->addColumn('created_at', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('updated_at', 'datetime', ['null' => true, 'default' => null])
            ->create();
    }
}
