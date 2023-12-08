<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_service' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('service');
    }

    public function down()
    {
        $this->forge->dropTable('service', true);
    }
}
