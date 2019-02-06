<?php


use Phinx\Migration\AbstractMigration;

class UserAdmin extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('users');
        $table->insert(
            [
                'username'  => 'Admin User',
                'password' => 'FE1C0E7E87CE9BF0E20C073DEC6BA6168839C4A0',
                'email' => 'user@email.com',
                'first_name' => 'Fulano',
                'last_name' => 'Silva',
                'created' => '2019-02-06 17:54:59',
                'updated' => '2019-02-06 17:54:59'
            ]
        );
        $table->saveData();
    }

    public function down()
    {
        $this->execute('DELETE FROM users');
    }
}
