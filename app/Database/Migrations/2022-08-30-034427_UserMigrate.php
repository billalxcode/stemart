<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'firstname' => [
                'type' => 'TEXT'
            ],
            'lastname' => [
                'type' => 'TEXT'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'address' => [
                'type' => 'TEXT'
            ],
            'refresh_token' => [
                'type' => 'TEXT'
            ],
            'password' => [
                'type' => 'TEXT'
            ],
            'status' => [
                'type' => "ENUM('active','inactive','blocked')"
            ],
            'role' => [
                'type' => "ENUM('admin','customer')"
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'update_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
