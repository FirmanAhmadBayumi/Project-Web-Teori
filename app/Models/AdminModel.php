<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{

    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'email', 'username', 'password_hash', 'active'];

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

    public function showUser($role){
        return $this->db->table('auth_groups_users')
        ->select('users.*')
        ->join('auth_groups','auth_groups_users.group_id = auth_groups.id','inner')
        ->join('users','auth_groups_users.user_id = users.id','inner')
        ->where('auth_groups_users.group_id',$role)
        ->get()->getResultArray();
    }

    public function countUser(){
        return $this->db->table('auth_groups_users')
        ->where('group_id', 1)
        ->countAllResults();
    }

    public function getPegawai($id){
        return $this->select('users.*')
        ->where('users.id', $id)
        ->find($id);
    }

    public function deleteUser($id){
        return $this->db->table('users')->where('id',$id)->delete();
    }

    public function savePegawai($data){
        $this->insert($data);
        $insertedId = $this->insertID();
        $this->db->table('auth_groups_users')->insert([
            'group_id' => 2,
            'user_id'=> $insertedId
        ]);
    }

    public function updatePegawai($id, $data){
        return $this->update($id, $data);
    }

}
