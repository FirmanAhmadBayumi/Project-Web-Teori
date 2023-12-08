<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\ProductModel;
use App\Models\InventarisModel;
use App\Controllers\BaseController;

class Pegawai extends BaseController
{

    public $ProductModel;
    public $InventarisModel;
    public $bookingModel;

    public function __construct() 
    {
        $this->ProductModel = new ProductModel ();
        $this->InventarisModel = new InventarisModel ();
        $this->bookingModel = new BookingModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard pegawai',
        ];
    return view ('Pegawai/index', $data);
}

    public function produk()
    {
        $data = [
            'title' => 'Product',
        ];
    return view ('Pegawai/produk', $data);

    }

    public function inventaris()
    {
        $data = [
            'title' => 'Inventaris',
        ];
    return view ('Pegawai/inventaris', $data);

    }
    public function listInventaris(): string
            {
                $data = [
                    'title' => 'List Inventaris',
                    'inventaris' => $this->InventarisModel->getInventaris(),
                ];
                return view('admin/inventaris',$data);
            }
            public function createinventaris(): string
            {
                $data = [
                    'title' => 'Form Tambah Inventaris',
                ];
                return view('Pegawai/create_inventaris',$data);
            }
    
    public function confirm()
    {
        $data = [
            'title' => 'Confirm Booking',
            'data' => $this->bookingModel->getConfirmBooking()

        ];
        return view ('Pegawai/confirm', $data);

    }

    public function confirmBooking($id_booking)
    {

        $this->bookingModel->updateStatus($id_booking, ['status'=>2]);

        return redirect()->to('pegawai/konfirmasi/');

    }

    
    public function complete()
    {
        $data = [
            'title' => 'Complete booking',
            'data' => $this->bookingModel->getCompleteBooking()
        ];
    return view ('Pegawai/complete', $data);
    
    }

    public function completeBooking($id_booking)
    {

        $this->bookingModel->updateStatus($id_booking, ['status'=>3]);

        return redirect()->to('pegawai/complete/');

    }

    public function history()
    {
        $data = [
            'title' => 'History booking',
            'data' => $this->bookingModel->getHistoryBooking()
        ];
    return view ('Pegawai/history', $data);
    
    }

    public function listProduct(): string
            {
                $data = [
            'title' => 'List product',
            'product' => $this->ProductModel->getProduct(),

        ];
        return view('Pegaawai/produk',$data);
    }

    public function createproduct(): string
    {
        $data = [
            'title' => 'Form Tambah product',
        ];
        return view('Pegawai/create_product',$data);
    }
    public function storeproduct()
    {
        if (!$this->validate([
            'foto_product' => [
                'rules'         => 'uploaded[foto_product]|is_image[foto_product]|mime_in[foto_product,image/jpg,image/jpeg,image/png]',

                'errors'        => [
                    'uploaded'  => 'Foto harus dipilih.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'   => 'Foto harus berekstensi png,jpg,jpeg,gif.'
                ]
                ],
            'harga_product' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
            ],
            'stok_product' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
                ],
            'nama_product' => [
                'rules' => 'required|is_unique[product.nama_product]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                    'is_unique' => '{field} sudah terdaftar.',
                    ]
                ],
                ])) {
                    $validationErrors = $this->validator->getErrors();

                    // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
                    foreach ($validationErrors as $field => $error) {
                        session()->setFlashdata('error_' . $field, $error);
                    }
                    return redirect()->to('/pegawai/createproduct')->withInput();


                }
                $path = 'assets/img/';
                $foto = $this->request->getFile('foto_product');
                $name = $foto->getRandomName();

                if ($foto->move($path, $name)) {
                    $foto = base_url($path . $name);
                }
                $this->ProductModel->saveproduct([
                // $this->ProductModel->saveproduct([
                    'nama_product' => $this->request->getVar('nama_product'),
                    'harga_product' => $this->request->getVar('harga_product'),
                    'stok_product' => $this->request->getVar('stok_product'),
                    'foto_product' => $foto,

                ]);

                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
                return redirect()->to('/pegawai/produk/');
            }
            // public function editproduct($id)
            // {

            //     $data = [
            //         'title' => 'Form Update product',
            //         'p' =>  $this->ProductModel->getproductid($id)
            //     ];
            //     return view('Pegawai/update_product',$data);
            // }
            // public function updateproduct($id)
            // {

            //     $path = 'assets/img/';
            //     $foto = $this->request->getFile('foto_product');

            //     // Periksa apakah ada file foto baru yang diunggah
            //     if ($foto->isValid()) {
            //         $name = $foto->getRandomName();
            //         if ($foto->move($path, $name)) {
            //             $foto = base_url($path . $name);
            //         }
            //     } else {
            //         $existingData = $this->ProductModel->getproductid($id); 
            //         $foto = $existingData['foto_product'];
            //     }

            //     $data = [
            //         'nama_product' => $this->request->getVar('nama_product'),
            //         'harga_product' => $this->request->getVar('harga_product'),
            //         'stok_product' => $this->request->getVar('stok_product'),
            //         'foto_product' => $foto,
            //     ];

            //     $result = $this->ProductModel->updateproduct($id, $data);

            //     if (!$result) {
            //         return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
            //     }

            //     return redirect()->to('pegawai/produk');
            // }
            // public function destroyproduct($id)
            // {
            //     $result = $this->ProductModel->deleteproduct($id);
            //     if (!$result) {
            //         return redirect()->back()->with('Error', 'Gagal menghapus Data');
            //     }
            //     return redirect()->to(base_url('/pegawai/produk/'))->with('success', 'Berhasil menghapus data');
            // }


            
            public function storeInventaris()
            {
                if (!$this->validate([
                    'nama_inventaris' => [
                        'rules' => 'required|is_unique[inventaris.nama_inventaris]',
                        'errors' => [
                            'required' => '{field} tidak boleh kosong.',
                            'is_unique' => '{field} sudah terdaftar.',
                            ]
                        ],
                        ])) {
                            $validationErrors = $this->validator->getErrors();
                            
                            // Simpan pesan kesalahan dalam flashdata berdasarkan nama bidang
                            foreach ($validationErrors as $field => $error) {
                                session()->setFlashdata('error_' . $field, $error);
                            }
                            return redirect()->to('/pegawai/createInventaris')->withInput();
                            
                            
                        }
                        
                        $this->InventarisModel->saveInventaris([
                            'nama_inventaris' => $this->request->getVar('nama_inventaris'),
                            
                        ]);
                        
                        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
                        return redirect()->to('/pegawai/inventaris/');
                    }
                    public function editInventaris($id)
                    {
        
                        $data = [
                            'title' => 'Form Update Inventaris',
                            'inv' =>  $this->InventarisModel->getInventarisid($id)
                        ];
                        return view('pegawai/editinventaris',$data);
                    }
                    public function updateInventaris($id)
                    {
        
                        $data = [
                            'nama_inventaris' => $this->request->getVar('nama_inventaris'),
                        ];
                    
                        $result = $this->InventarisModel->updateInventaris($id, $data);
                    
                        if (!$result) {
                            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
                        }
                    
                        return redirect()->to('/pegawai/inventaris/');
                    }
                    public function destroyInventaris($id)
                    {
                        $result = $this->InventarisModel->deleteInventaris($id);
                        if (!$result) {
                            return redirect()->back()->with('Error', 'Gagal menghapus Data');
                        }
                        return redirect()->to(base_url('/pegawai/inventaris/'))->with('success', 'Berhasil menghapus data');
                    }
                  
          
}
