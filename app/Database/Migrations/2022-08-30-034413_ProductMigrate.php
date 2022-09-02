<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductMigrate extends Migration
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
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'product_slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'product_price' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'product_summary' => [
                'type' => 'TEXT',
                'null' => false
            ],
            'product_stock' => [
                'type' => 'INT',
                'constraint' => 25,
                'null' => false
            ],
            'product_category' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'product_thumb' => [
                'type' => 'TEXT',
            ],
            'product_discount' => [
                'type' => 'INT',
                'constraint' => 25
            ],
            'product_locaion' => [
                'type' => 'INT',
                'constraint' => 255
            ],
            'product_sales' => [
                'type' => 'INT',
                'constraint' => 25,
                'null' => true
            ],
            'is_active' => [
                'type' => "ENUM('true','false')"
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
        $this->forge->addUniqueKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
