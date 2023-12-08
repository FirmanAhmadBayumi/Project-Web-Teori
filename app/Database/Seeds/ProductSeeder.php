<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ProductModel;
class ProductSeeder extends Seeder
{ public function run()
    {
        $pmodel = new ProductModel();
        $pmodel->save([
            'nama_product' => 'Obat Flu Kucing Im Organic Doxy Cat ecer',
            'harga_product' => '12000',
            'stok_product' => 15,
            'foto_product' => 'https://petshopindonesia.com/wp-content/uploads/2022/12/p000131-obat-flu-kucing-im-organic-doxy-cat-ecer-1-1.jpg.webp',
        ]);
    }
}
