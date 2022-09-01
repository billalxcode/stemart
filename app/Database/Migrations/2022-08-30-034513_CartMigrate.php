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
                'auto_incremenet' => true,
                'unsigned' => true,
                'null' => true
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 255
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
        $this->forge->createTable('carts');
    }

    public function down()
    {
        $this->forge->dropTable('carts');
    }
}
