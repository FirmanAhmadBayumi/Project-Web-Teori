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
                                    <th>Yakin</th>
                                    <th>Cukup Yakin</th>
                                    <th>Kurang Yakin</th>
                                    <th>Tidak Yakin</th>
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
                                            <input type="radio" name="nilai[<?= $no ?>]" value="1">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0.8">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0.4">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0">
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