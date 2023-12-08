<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatebookingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'id_service' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nama_pemilik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nomor_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'usia_hewan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_booking' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => '1',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->addForeignKey('id_service', 'service', 'id');
        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking', true);
    }
}