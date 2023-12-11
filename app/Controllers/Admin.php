<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\InventarisModel;
use App\Models\ProductModel;
use App\Models\ServiceModel;
use App\Models\KriteriaModel;
use App\Models\SkalaModel;


use Myth\Auth\Password;

class Admin extends BaseController
{
    public $InventarisModel;
    public $ProductModel;
    public $ServiceModel;
    public $adminModel;
    public $krit;
    public $skala;
    
    public function __construct() 
    {
        $this->InventarisModel = new InventarisModel ();
        $this->ProductModel = new ProductModel ();
        $this->ServiceModel = new ServiceModel ();
        $this->adminModel = new AdminModel ();
        $this->krit = new KriteriaModel();
        $this->skala = new SkalaModel();

    }
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/index', $data);
    }
    public function listInventaris(): string
    {
        $data = [
            'title' => 'List Kriteria',
            'inventaris' => $this->krit->getKriteria(),
        ];
        return view('admin/inventaris',$data);
    }
    public function createInventaris(): string
    {
        $data = [
            'title' => 'Form Tambah Inventaris',
            'skala' => $this->skala->getSkala()
        ];
        return view('admin/forminventaris',$data);
    }
    public function storeInventaris()
    {
        if (!$this->validate([
            'nama_inventaris' => [
                'rules' => 'required|is_unique[kode_kriteria.keterangan]',
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
                    return redirect()->to('/admin/inventaris/create')->withInput();
                    
                    
                }
                
                $this->krit->saveKriteria([
                    'keterangan' => $this->request->getVar('nama_inventaris'),
                    
                ],$this->request->getVar('skala'));
                
                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
                return redirect()->to('/admin/inventaris/');
            }
            public function editInventaris($id)
            {

                $data = [
                    'title' => 'Form Update Inventaris',
                    'inv' =>  $this->krit->getKriteria($id)
                ];
                return view('admin/editinventaris',$data);
            }
            public function updateInventaris($id)
            {

                $data = [
                    'keterangan' => $this->request->getVar('keterangan'),
                ];
            
                $result = $this->krit->updateKriteria($id, $data);
      
                if (!$result) {
                    return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
                    
                }
            
                return redirect()->to('/admin/inventaris/');
            }

            public function destroyInventaris($id){
                 $this->krit->deleteUser($id);
                 return redirect()->to('/admin/inventaris/');
            }
            
            // public function destroyInventaris($id)
            // {
            //     $result = $this->InventarisModel->deleteInventaris($id);
            //     if (!$result) {
            //         return redirect()->back()->with('Error', 'Gagal menghapus Data');
            //     }
            //     return redirect()->to(base_url('/admin/inventaris/'))->with('success', 'Berhasil menghapus data');
            // }
            public function listProduct(): string
            {
                $data = [
            'title' => 'List product',
            'product' => $this->skala->getSkala(),
            
        ];
        return view('admin/product',$data);
    }
    public function createproduct(): string
    {
        $data = [
            'title' => 'Form Tambah product',
        ];
        return view('admin/formproduct',$data);
    }
    public function storeproduct()
    {
        if (!$this->validate([
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
                    return redirect()->to('/admin/product/create')->withInput();
                    
                    
                }
                $this->skala->saveSkala([
                    'nama' => $this->request->getVar('nama_product'),
                    'deskripsi' => $this->request->getVar('stok_product')
      
                ]);
                
                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
                return redirect()->to('/admin/product/');
            }
            public function editproduct($id)
            {

                $data = [
                    'title' => 'Form Update product',
                    'p' =>  $this->ProductModel->getproductid($id)
                ];
                return view('admin/editproduct',$data);
            }
            public function updateproduct($id)
            {

                $path = 'assets/img/';
                $foto = $this->request->getFile('foto_product');
            
                // Periksa apakah ada file foto baru yang diunggah
                if ($foto->isValid()) {
                    $name = $foto->getRandomName();
                    if ($foto->move($path, $name)) {
                        $foto = base_url($path . $name);
                    }
                } else {
                    $existingData = $this->ProductModel->getproductid($id); 
                    $foto = $existingData['foto_product'];
                }
            
                $data = [
                    'nama_product' => $this->request->getVar('nama_product'),
                    'harga_product' => $this->request->getVar('harga_product'),
                    'stok_product' => $this->request->getVar('stok_product'),
                    'foto_product' => $foto,
                ];
            
                $result = $this->ProductModel->updateproduct($id, $data);
            
                if (!$result) {
                    return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
                }
            
                return redirect()->to('admin/product');
            }
            public function destroyproduct($id)
            {
                $result = $this->ProductModel->deleteproduct($id);
                if (!$result) {
                    return redirect()->back()->with('Error', 'Gagal menghapus Data');
                }
                return redirect()->to(base_url('/admin/product/'))->with('success', 'Berhasil menghapus data');
            }
    public function listService(): string
    {
        $data = [
            'title' => 'List service',
            'service' => $this->ServiceModel->getService(),
            
        ];
        return view('admin/service',$data);
    }


    public function createservice(): string
    {
        $data = [
            'title' => 'Form Tambah service',
        ];
        return view('admin/formservice',$data);
    }
    public function storeservice()
    {
        if (!$this->validate([
            'nama_service' => [
                'rules' => 'required|is_unique[service.nama_service]',
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
                    return redirect()->to('/admin/service/create')->withInput();
                    
                    
                }
                
                $this->ServiceModel->saveservice([
                    'nama_service' => $this->request->getVar('nama_service'),
                    
                ]);
                
                session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
                return redirect()->to('/admin/service/');
            }
            public function editservice($id)
            {

                $data = [
                    'title' => 'Form Update service',
                    'inv' =>  $this->ServiceModel->getserviceid($id)
                ];
                return view('admin/editservice',$data);
            }
            public function updateservice($id)
            {

                $data = [
                    'nama_service' => $this->request->getVar('nama_service'),
                ];
            
                $result = $this->ServiceModel->updateservice($id, $data);
            
                if (!$result) {
                    return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
                }
            
                return redirect()->to('/admin/service/');
            }
            public function destroyservice($id)
            {
                $result = $this->ServiceModel->deleteservice($id);
                if (!$result) {
                    return redirect()->back()->with('Error', 'Gagal menghapus Data');
                }
                return redirect()->to(base_url('/admin/service/'))->with('success', 'Berhasil menghapus data');
            }
    public function listUser(): string
    {   

        $users = $this->adminModel->showUser(1);

        $data = [
            'title' => 'List user',
            'data' => $users,
        ];
        return view('admin/user',$data);
    }

    public function deleteUser($id)
    {
        $this->adminModel->deleteUser($id);

        return redirect()->back()->with('success','berhasil menghapus user');
    }

    public function listPegawai(): string
    {

        $pegawai = $this->adminModel->showUser(2);

        $data = [
            'title' => 'List pegawai',
            'data' => $pegawai
            
        ];
        return view('admin/pegawai',$data);
    }
    public function addPegawai(){
        $data = [
            'title'=> 'Tambah Pegawai',   
        ];
        return view ('admin/addPegawai',$data);
    }

    public function savePegawai(){
        
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password_hash' => Password::hash($this->request->getVar('password')),
            'active' => 1
            
        ];

        // dd($data);

        $this->adminModel->savePegawai($data);        

        return redirect()->to('/admin/akun-pegawai')->with('success','berhasil menambah pegawai');
    }

    public function editPegawai($id){

        $data = [
            'title' => 'Edit Pegawai',
            'pegawai' => $this->adminModel->getPegawai($id)
        ];

        return view('admin/editPegawai', $data);
    }

    public function updatePegawai($id){

        $data = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
        ];

        if($this->request->getVar('password') != ''){
            $data['password_hash'] = Password::hash($this->request->getVar('password'));
        }

        $result = $this->adminModel->updatePegawai($id, $data);

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal Update Data!');
        }

        return redirect()->to('admin/akun-pegawai');

    }

}
