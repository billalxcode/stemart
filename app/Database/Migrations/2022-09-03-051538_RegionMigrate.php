<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RegionMigrate extends Migration
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
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],
            'type' => [
                'type' => "ENUM('provinsi', 'kota', 'kec', 'desa')"
            ],
            'parent' => [
                'type' => 'INT',
                'constraint' => 255,
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
        $this->forge->createTable('regions');
    }

    public function down()
    {
        $this->forge->dropTable('regions');
    }
}
