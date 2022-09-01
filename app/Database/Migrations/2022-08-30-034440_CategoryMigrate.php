<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryMigrate extends Migration
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
            'category_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'category_slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'parent_id' => [
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
        $this->forge->addUniqueKey('category_slug');
        $this->forge->createTable('category');
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}
