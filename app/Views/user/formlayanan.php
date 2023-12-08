<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1" style="border-radius: 20px;">
    <h1 class="text-center">Form Pertanyaan</h1>
    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php if(session()->getFlashdata('pesan')): ?>
                            <div class="alert alert-warning">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <!-- <div class="table-responsive"> -->
                        <form action="<?= base_url('user/hasil')?>" method="POST">
    
                            <table class="table table-striped table-md" id="daftarGejala">
                                <tr class="text-center header">
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Pilih Kondisi</th>
    
                                </tr>
                                <?php
                                $no = 1;
                                foreach($basisPengetahuan as $b): ?>
                                    <tr>
    
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id_kriteria[]" value="<?= $b['id_kriteria']; ?>">
    
                                            <?= $b['keterangan']; ?>
    
                                        </td>
                                        <td>
    
    
                                            <div class="form-group">
    
                                                <select class="form-control pilihkondisi" id="select<?= $no; ?>"
                                                    data-id="<?= $no; ?>" name="nilai[]">
                                                    <!-- <option value="0" data-id="0">Pilih jika sesuai</option> -->
                                                    <?php for($i = 0; $i < 4; $i++) {
                                                        $nilai = [1, 0.8, 0.4, 0];
                                                        $ket = [
                                                            'Yakin',
                                                            'Cukup Yakin',
                                                            'Kurang Yakin',
                                                            'Tidak Yakin'
                                                        ]; ?>
                                                        <option value="<?= $nilai[$i]; ?>" data-id="<?= $i + 1; ?>
                                                            " <?php if($nilai[$i] == 0) {
                                                                echo 'selected';
                                                            }
                                                            ; ?>>
                                                            <?php echo $ket[$i]; ?>
                                                        </option>
    
                                                        <?php
                                                    }
                                                    ; ?>
                                                </select>   
    
                                            </div>
    
    
                                        </td>
    
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <div id="btn-diagnosis">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
    
                        </form>
                    </div>
    
                </div>
    
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>