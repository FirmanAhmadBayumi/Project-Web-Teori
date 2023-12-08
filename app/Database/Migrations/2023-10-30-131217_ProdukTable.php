<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class productTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_product' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga_product' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'stok_product' =>[
                'type' => 'INT',
                'constraint' => 15,      
            ],
            'foto_product' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null'          => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'constraint' => true,
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product', true);
    }
}
