<?php
use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'signed' => false
        ]);
        $table->addPrimaryKey('id');
        $table->addColumn('username', 'string');
        $table->addColumn('password', 'string');
        $table->addColumn('name', 'string', [
            'null' => true,
            'default' => null
        ]);
        $table->addColumn('birthdate', 'date', [
            'null' => true,
            'default' => null
        ]);
        $table->addColumn('gender', 'integer', [
            'null' => true,
            'default' => null,
            'limit' => 1
        ]);
        $table->addColumn('address', 'string', [
            'null' => true,
            'default' => null
        ]);
        $table->addColumn('avatar', 'string', [
            'null' => true,
            'default' => null
        ]);
        $table->addColumn('created_at', 'datetime');
        $table->addColumn('created_by', 'integer', [
            'signed' => false
        ]);
        $table->addColumn('updated_at', 'datetime', [
            'null' => true,
            'default' => null
        ]);
        $table->addColumn('updated_by', 'integer', [
            'null' => true,
            'default' => null,
            'signed' => false
        ]);
        $table->addColumn('deleted_at', 'datetime', [
            'null' => true,
            'default' => null
        ]);
        $table->create();
    }
}
