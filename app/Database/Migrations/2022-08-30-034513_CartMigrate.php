<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'auto_increment' => true,
                'unsigned' => true,
                'null' => true
            ],
            'customer_id' => [
                'type' => "INT",
                'constraint' => 25,
                'null' => false
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'price' => [
                'type' => 'INT',    
                'constraint' => 25
            ],
            'discount' => [
                'type' => 'INT',
                'constraint' => 25,
                'null' => true
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
        $this->forge->createTable('order_item');
    }

    public function down()
    {
        $this->forge->dropTable('order_item');
    }
}
