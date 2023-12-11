<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model {
    protected $table = 'kode_kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['keterangan'];

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

    public function getKriteria($id = false) {

        if($id == false) {
            return $this->findAll();
        } else if(is_array($id)) {
            return $this
                ->table('kode_kriteria')
                ->whereIn('id_kriteria', $id)->find();
        }
        return $this->where(['id_kriteria' => $id])->first();
    }
    public function saveKriteria($data, $skala) {
        $this->insert($data);
        $id = $this->insertID();
        $this->db->table('basis_pengetahuan')->insert([
            'id_skala' => $skala,
            'id_kriteria' => $id,
            'cf' => 0.6
        ]);
    }


}
