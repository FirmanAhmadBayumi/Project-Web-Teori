<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\productModel;
use App\Models\ServiceModel;
use App\Models\TransaksiModel;
use App\Models\UserModel;


class UserController extends BaseController
{   
    public $productModel;
    public $transaksiModel;
    public $userModel;
    public $serviceModel;

    public function __construct() {
        $this->productModel = new productModel();
        $this->transaksiModel = new TransaksiModel();
        $this->userModel = new UserModel();
        $this->serviceModel = new ServiceModel();
    }
    public function index()
    {   
        $data = [
            "title"=> "Home",
        ];
        return view("user/dashboard_user", $data);
    }

    public function products(){

        //ambil list product dari db

        $data = [
            "title"=> "Products",
            'product'=> $this->productModel->getproduct()
        ];
        return view("user/products", $data);
    }
    public function detailsproducts($id){
        $data = [
            "title"=> "Detail Products",
            'product'=> $this->productModel->getproduct($id)
        ];
        return view("user/detail_products", $data);
    }
    public function formslayanan(){
        $data = [
            "title"=> "Form Layanan",
            "services" => $this->serviceModel->getService(),
        ];
        return view("user/formlayanan", $data);
    }
    public function simpan_data()
    {
        $bookingModel = new BookingModel();

        $data = [
            'id_user' => user_id(),
            'id_service' => $this->request->getPost('layanan'),
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'nama_hewan' => $this->request->getPost('nama_hewan'),
            'jenis_hewan' => $this->request->getPost('jenis_hewan'),
            'usia_hewan' => $this->request->getPost('usia_hewan'),
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
            'status' => 1
        ];

        $bookingModel->insert($data);

        return redirect()->to(base_url('user/services'))->with('success', 'Data berhasil disimpan');
    }

    public function profiles(){
        $data = [
            'title' => 'User Profile',
            'profile' => $this->userModel->getIdUser(user_id()),
        ];
        return view("user/profile", $data);
    }

    public function edit_profile()
{

    // // Validasi form
    // $this->validate([
    //     'username' => 'required|string|min:3|max:255',
    //     'email' => 'required|email',
    //     'alamat' => 'required|string',
    //     'no_hp' => 'required|string|min:10|max:15',
    // ]);

    // // Ambil data dari form
    // $data = $this->request->getPost();

    // // Ubah data di database
    // $this->userModel->update($data);

    // // Set flashdata
    // session()->setFlashdata('success', 'Profil berhasil diperbarui');

    // // Redirect ke halaman profil
    $data = [
        'title' => 'Edit Profile',
        'profile' => $this->userModel->getIdUser(user_id()),
    ];
    return view("user/editprofile", $data);
}

public function update($id)
{
   
}




    public function services(){
        $data = [
            "title"=> "Services",
        ];
        return view("user/services", $data);
    }  

    public function buyProduct($id){
        $data = [
            'id_user' => user_id(),
            'id_product' => $id,
            'tanggal_transaksi' => date("Y-m-d h:i:s"),
            'alamat' => $this->request->getVar('alamat'),
            'jumlah_barang' => $this->request->getVar('jumlah'),
            'total_transaksi' => $this->request->getVar('jumlah')*$this->request->getVar('harga')
        ];

        // dd($data);

        $this->transaksiModel->beliProduct($data);

        return redirect()->to('user/product')->with('success', 'product berhasil dibeli');

    }
     
}
