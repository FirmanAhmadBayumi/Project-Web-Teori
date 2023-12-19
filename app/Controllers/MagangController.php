<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MagangModel;
use CodeIgniter\API\ResponseTrait;

class MagangController extends BaseController
{   
    use ResponseTrait;
    public $magangModel;
    public function __construct(){
        $this->magangModel = new MagangModel();
    }
    public function index($npm=null)
    {
        $mahasiswa = $this->magangModel->showData($npm);

        $result = [
            'status' => 200,
            'data' => $mahasiswa
        ];

        return $this->respond($result);
    }

    public function create()
    {
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'semester' => $this->request->getPost('semester'),
            'ipk' => $this->request->getPost('ipk'),
            'tempat' => $this->request->getPost('tempat'),
        ];
        $create = $this->magangModel->insertData($data);

        $result = [
            'status' => 200,
            'meaasage' => "Data berhasil ditambah!"
        ];

        return $this->respond($result);
    }

    public function delete($npm)
    {
        
        $delete = $this->magangModel->deleteData($npm);

        $result = [
            'status' => 200,
            'meaasage' => "Data berhasil dihapus!"
        ];

        return $this->respond($result);
    }

    public function update($npm)
    {
        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'semester' => $this->request->getVar('semester'),
        //     'ipk' => $this->request->getVar('ipk'),
        //     'tempat' => $this->request->getVar('tempat'),
        // ];

        $data = $this->request->getRawInput();
        $update = $this->magangModel->updateData($npm, $data);

        $result = [
            'status' => 200,
            'meaasage' => "Data berhasil diubah!"
        ];

        return $this->respond($result); 
    }

}
