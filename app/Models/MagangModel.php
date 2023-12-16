<?php

namespace App\Models;

use CodeIgniter\Model;

class MagangModel extends Model
{
    protected $table            = 'mahasiswa_magang';
    protected $primaryKey       = 'npm';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['npm', 'nama', 'semester', 'ipk', 'tempat'];

    // Dates
    protected $useTimestamps = false;
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


    public function showData($id=null){
        if ($id!=null){
            return $this->find($id);
        }
            return $this->findAll();
    }

    public function insertData($data){
        return $this->insert($data);
    }

    public function deleteData($npm){
        return $this->delete($npm);
    }
    public function updateData($npm, $data){
        return $this->update($npm, $data);
    }


}
