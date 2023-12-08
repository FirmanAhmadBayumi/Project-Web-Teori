<?php

namespace App\Models;

use CodeIgniter\Model;

class BasisPengetahuanModel extends Model {
    protected $table = 'basis_pengetahuan';
    protected $primaryKey = 'id_pengetahuan';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_penyakit', 'id_gejala', 'cf'];

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

    public function getBasisPengetahuan($id = false) {

        if($id == false) {
            return $this->table('basis_pengetahuan')
                ->select('basis_pengetahuan.id_kriteria, kode_kriteria.keterangan')
                ->join('skala_investasi', 'skala_investasi.id_skala = basis_pengetahuan.id_skala')
                ->join('kode_kriteria', 'kode_kriteria.id_kriteria = basis_pengetahuan.id_kriteria')
                ->groupBy('basis_pengetahuan.id_kriteria');
        } else if(is_array($id) == true) {

            return $this->table('basis_pengetahuan')
                ->whereIn('id_kriteria', $id)->find();
        } else {

            return $this->table('basis_pengetahuan')
                ->join('skala_investasi', 'skala_investasi.id_skala = basis_pengetahuan.id_skala')
                ->join('kode_kriteria', 'kode_kriteria.id_kriteria = basis_pengetahuan.id_kriteria')
                ->where(['basis_pengetahuan.id_skala' => $id])->find();
        }
    }




}
