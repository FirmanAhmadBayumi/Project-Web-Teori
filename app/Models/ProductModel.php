<?php

namespace App\Models;

use CodeIgniter\Model;

class productModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_product','harga_product','stok_product','foto_product', 'category', 'deskripsi'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getproduct($id=null){
        if ($id !=null) {

            return $this->select('product.*')
                ->find($id);
        }
        return $this->select('product.*')
                ->findAll();
    }

    public function saveproduct($data){
        $this->insert($data);       
    }
    public function updateproduct($id, $data) {
        return $this->update($id, $data);
    }
    public function deleteproduct($id) {
        return $this->delete($id);
    }
    public function getproductid($id=null){
        if ($id !=null) {

            return $this->select('product.*')
                ->find($id);
        }
        return $this->select('product.*')
                ->findAll();
    }

}
