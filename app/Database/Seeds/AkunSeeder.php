<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
class AkunSeeder extends Seeder
{
    public function run()
    {
        $Umodel = new UserModel();
        $Umodel->save([
            'username' => 'user', 
            'password'=>'12345678',
            'role'=>1,
            'email'=>'user@gmail.com'
        ]);
        $Umodel->save([
            'username' => 'pegawai', 
            'password'=>'12345678',
            'role'=>2,
            'email'=>'pegawai@gmail.com'
        ]);
    }
}
