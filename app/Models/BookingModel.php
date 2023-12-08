<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table            = 'booking';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['id_user', 'id_service', 'nama_pemilik', 'nomor_telepon', 'nama_hewan', 'jenis_hewan', 'usia_hewan', 'layanan', 'tanggal_booking', 'status'];

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

    public function getConfirmBooking(){
        return $this->select('booking.id, booking.id_user, booking.nama_pemilik, booking.nomor_telepon, 
        booking.nama_hewan, booking.jenis_hewan, booking.usia_hewan, service.nama_service, booking.tanggal_booking')
        ->join('users', 'booking.id_user = users.id')
        ->join('service', 'booking.id_service = service.id')
        ->where('booking.status', 1)
        ->findAll();
    }

    public function getCompleteBooking(){
        return $this->select('booking.id, booking.id_user, booking.nama_pemilik, booking.nomor_telepon, 
        booking.nama_hewan, booking.jenis_hewan, booking.usia_hewan, service.nama_service, booking.tanggal_booking')
        ->join('users', 'booking.id_user = users.id')
        ->join('service', 'booking.id_service = service.id')
        ->where('booking.status', 2)
        ->findAll();
    }

    public function getHistoryBooking(){
        return $this->select('booking.id, booking.id_user, booking.nama_pemilik, booking.nomor_telepon, 
        booking.nama_hewan, booking.jenis_hewan, booking.usia_hewan, service.nama_service, booking.tanggal_booking')
        ->join('users', 'booking.id_user = users.id')
        ->join('service', 'booking.id_service = service.id')
        ->where('booking.status', 3)
        ->findAll();
    }

    public function updateStatus($id_booking, $data){
        return $this->update($id_booking, $data);
    }

}
