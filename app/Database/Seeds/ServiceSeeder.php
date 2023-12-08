<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ServiceModel;
class ServiceSeeder extends Seeder
{
    public function run()
    {
        $Smodel = new ServiceModel();
        $Smodel->save([
            'nama_service' => 'Perawatan_Hewan'
        ]);
        $Smodel->save([
            'nama_service' => 'Hotel_Hewan'
        ]);
        $Smodel->save([
            'nama_service' => 'Klinik_Hewan'
        ]);
    }
}
