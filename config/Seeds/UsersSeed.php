<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'dev',
                'password' => 'dev',
                'name' => 'dev',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
