<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\InventarisModel;
class InventarisSeeder extends Seeder
{
    public function run()
    {
        $Imodel = new InventarisModel();
        $Imodel->save([
            'nama_inventaris' => 'Obat & Vitamin'
        ]);
        $Imodel->save([
            'nama_inventaris' => 'Makanan'
        ]);
        $Imodel->save([
            'nama_inventaris' => 'Peralatan'
        ]);
    }
}
