<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarisModel extends Model
{
    protected $table            = 'inventaris';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_inventaris'];

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

    public function getInventaris(){
        return $this->findAll();
    }

    public function saveInventaris($data){
        $this->insert($data);       
    }
    public function updateInventaris($id, $data) {
        return $this->update($id, $data);
    }
    public function deleteInventaris($id) {
        return $this->delete($id);
    }
    public function getInventarisid($id=null){
        if ($id !=null) {

            return $this->select('inventaris.*')
                ->find($id);
        }
        return $this->select('inventaris.*')
                ->findAll();
    }
}
