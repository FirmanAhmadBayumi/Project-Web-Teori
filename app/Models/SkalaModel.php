<?php

namespace App\Models;

use CodeIgniter\Model;

class SkalaModel extends Model {
    protected $table = 'skala_investasi';
    protected $primaryKey = 'id_skala';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['nama', 'deskripsi', 'saran', 'gambar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getSkala($id = false) {

        if($id == false) {
            return $this->findAll();
        } else if(is_array($id)) {
            return $this
                ->table('skala_investasi')
                ->whereIn('id_skala', $id)->find();
        }
        return $this->where(['id_skala' => $id])->first();
        ;
    }
    public function saveSkala($data) {
        $this->insert($data) ;
    }
}
