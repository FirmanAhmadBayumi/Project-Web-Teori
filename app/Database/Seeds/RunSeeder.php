<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RunSeeder extends Seeder
{
    public function run()
    {
        $this->call('InventarisSeeder');
        $this->call('ProductSeeder');
        $this->call('ServiceSeeder');
    }
}
