<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('first_name', 'string', array('limit' => 100))
            ->addColumn('last_name', 'string', array('limit' => 100))
            ->addColumn('email', 'string', array('limit' => 100))
            ->addColumn('password', 'string')
            ->addColumn('role', 'enum', array('values' => 'admin, visita'))
            ->addColumn('active', 'boolean')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
