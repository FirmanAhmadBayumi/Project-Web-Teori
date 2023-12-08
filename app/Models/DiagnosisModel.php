<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosisModel extends Model {
    protected $table = 'diagnosis';
    protected $primaryKey = 'id_diagnosis';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_user', 'penyakit', 'gejala', 'id_hasil', 'nilai'];

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

    public function getData() {

        // mengambil satu id terakhir yg disimpan
        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->orderBy('id_diagnosis', 'DESC')->first();
    }

    public function getHistory($id) {

        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->orderBy('id_diagnosis', 'DESC')->where(['id_user' => $id])->find();
    }

    public function getHistoryDetail($id) {
        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')->join('users', 'users.id = diagnosis.id_user', 'left')
            ->orderBy('id_diagnosis', 'DESC')
            ->where(['id_diagnosis' => $id])->first();
    }

    public function findDiagnosis() {
        return $this->table('diagnosis')->findAll();
    }

    public function getDiagnosis() {

        return $this->table('diagnosis')
            ->select('*, diagnosis.created_at AS tanggal')
            ->join('penyakit', 'penyakit.id_penyakit = diagnosis.id_hasil')
            ->join('users', 'users.id = diagnosis.id_user', 'left')
            ->orderBy('id_diagnosis', 'DESC');
    }

}
