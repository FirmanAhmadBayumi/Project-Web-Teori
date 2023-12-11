<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuanModel;
use App\Models\DiagnosisModel;
use App\Models\KriteriaModel;
use App\Models\SkalaModel;

class SispakController extends BaseController {
    public $diagnosisModel;
    public $kriteriaModel;
    public $skalaModel;
    public $basisPengetahuan;
    public function __construct() {
        $this->diagnosisModel = new DiagnosisModel();

        $this->kriteriaModel = new KriteriaModel();
        $this->basisPengetahuan = new BasisPengetahuanModel();
        $this->skalaModel = new SkalaModel();
    }
    public function index() {

        $data = [
            'title' => 'Diagnosis',
            'basisPengetahuan' => $this->basisPengetahuan->getBasisPengetahuan()->find(),
        ];
        // dd($this->basisPengetahuan->getData()->groupBy('basis_pengetahuan.id_gejala')->findAll());
        // dd($data);
        return view('user/formlayanan', $data);
    }

    public function forward_chaining() {

        $kriteriaUser = $this->request->getVar('id_kriteria');
        $nilaiKriteria = $this->request->getVar('nilai');

        // dd($nilaiKriteria); 

        //cek if user gak milih kriteria dan nilai kepercayaan
        $tmp = array_filter($nilaiKriteria);
        if(empty($tmp)) {
            session()->setFlashdata('pesan', 'Pilih kriteria yang sesuai!');
            return redirect()->back();
        }

        //menghilangkan nilai 0
        $size = count($nilaiKriteria);
        for($i = 0; $i < $size - 1; $i++) {

            $cari = array_search(0, $nilaiKriteria);

            if(is_int($cari)) {
                array_splice($kriteriaUser, $cari, 1);
                array_splice($nilaiKriteria, $cari, 1);
            }
        }


        //mencari basis pengetahuan yang cocok dengan kriteria yang ada
        $cariPengetahuan = $this->basisPengetahuan->getBasisPengetahuan($kriteriaUser);

        $idSkalaLama = '';
        $cfKriteriaLama = 0;
        foreach($cariPengetahuan as $c) {
            //cari posis array diagnosis['nilai'] yang sama dengan id_kriteria
            $cari = array_search($c['id_kriteria'], $kriteriaUser);

            $cfKriteria = $c['cf'] * $nilaiKriteria[$cari];

            //perhitungan Cf gabungan/pararel
            if($idSkalaLama == $c['id_skala']) {
                //cf1 dan cf2 bernilai positif
                if($cfKriteriaLama >= 0 && $cfKriteria >= 0) {
                    $cfKriteriaLama = $cfKriteriaLama + ($cfKriteria * (1 - $cfKriteriaLama));
                    //cf1 dan cf2 bernilai negatif
                } else if($cfKriteriaLama <= 0 && $cfKriteria <= 0) {
                    $cfKriteriaLama = $cfKriteriaLama + ($cfKriteria * (1 + $cfKriteriaLama));
                    //cf1 atau cf2 salah satu bernilai negatif
                } else if($cfKriteria * $cfKriteriaLama < 0) {
                    $cfKriteriaLama = ($cfKriteriaLama + $cfKriteria) / (1 - min(abs($cfKriteriaLama), abs($cfKriteria)));
                }
            } else {
                //jika kriteria pilihan hanya 1
                $cfKriteriaLama = $cfKriteria;
            }

            $idSkalaLama = $c['id_skala'];
            $daftarSkala[] = $idSkalaLama;
            $daftarNilai[] = number_format($cfKriteriaLama, 2);
            $skalaAkhir = array_combine($daftarSkala, $daftarNilai);
        }

        $nilaiMax = max($skalaAkhir);

        $id_hasil = array_search($nilaiMax, $skalaAkhir);

        $data = [
            'title' => 'Hasil',
            'hasil' => $this->skalaModel->getSkala($id_hasil),
        ];

        return view('user/hasilDiagnosa', $data);
    }


}
