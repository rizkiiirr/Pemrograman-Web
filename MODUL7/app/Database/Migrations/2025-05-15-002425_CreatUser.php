<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatUser extends Migration
{
    public function up()
    {
       $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 3,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'TEXT',
                'constraint' => '8',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
