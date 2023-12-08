<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatetransaksiTable extends Migration
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
            'id_product' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'tanggal_transaksi' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_barang' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total_transaksi' => [
                'type' => 'INT',
                'constraint' => 12,
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
        $this->forge->addForeignKey('id_product','product','id');
        $this->forge->addForeignKey('id_user','users','id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi', true);
    }
}


//tambah:
// - total harga
// - opsi di antar atau di ambil (dropdown)
// - alamat (nullable)