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
            'id_produk' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => true
            ],
            'kode_invoice' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
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
            'status' => [
                'type' => "ENUM('accept','reject')"
            ],
            'isnew' => [
                'type' => "ENUM('yes', 'no')"
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
