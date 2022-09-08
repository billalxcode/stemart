<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'auto_increment' => true,
                'unsigned' => true,
                'null' => false
            ],
            'item_id' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => true
            ],
            'invoice' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ] ,
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'total_order' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'total_discount' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => true
            ],
            'subtotal' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'status' => [
                'type' => "ENUM('accept','reject')"
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
        $this->forge->addUniqueKey('invoice');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
