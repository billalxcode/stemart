<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 25,
                'auto_increment' => true,
                'unsigned' => true,
                'null' => false
            ],
            'order_id' => [
                'type' => 'INT',
                'constraint' => 25,
                'null' => false
            ],
            'image_proof' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'note' => [
                'type' => "TEXT",
                'null' => false
            ],
            'status' => [
                'type' => "ENUM('accept','reject')"
            ],
            'notifed' => [
                'type' => "ENUM('yes','no')"
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
