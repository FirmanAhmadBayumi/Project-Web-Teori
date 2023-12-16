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
                                    <tr id="t1">
    
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id_kriteria[]" value="<?= $b['id_kriteria']; ?>">
    
                                            <?= $b['keterangan']; ?>
    
                                        </td>
                                  
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="1" id="b1[<?= $no ?>]">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0.8" id="b0.8[<?= $no ?>]">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0.4" id="b0.4[<?= $no ?>]">
                                        </td>
                                        <td>
                                            <input type="radio" name="nilai[<?= $no ?>]" value="0" id="b0[<?= $no ?>]">
                                        </td>
                                    
    
                                    </tr>
                                <?php $no++; endforeach; ?>
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
<script>
    document.querySelectorAll('input[type="radio"]').forEach(function(radio) {
      radio.addEventListener('change', function() {
        if(document.getElementById('b1[3]').checked) {
            document.getElementById('b1[4]').disabled = true;
            document.getElementById('b1[5]').disabled = true;
            document.getElementById('b1[4]').checked = false;
            document.getElementById('b1[5]').checked = false;
        }else if(document.getElementById('b1[4]').checked) {
            document.getElementById('b1[3]').disabled = true;
            document.getElementById('b1[5]').disabled = true;
            document.getElementById('b1[3]').checked = false;
            document.getElementById('b1[5]').checked = false;
        }else if(document.getElementById('b1[5]').checked) {
            document.getElementById('b1[3]').disabled = true;
            document.getElementById('b1[4]').disabled = true;
            document.getElementById('b1[3]').checked = false;
            document.getElementById('b1[4]').checked = false;
        }else{
            document.getElementById('b1[3]').disabled = false;
            document.getElementById('b1[4]').disabled = false;
            document.getElementById('b1[5]').disabled = false;
      }
    });
    radio.addEventListener('change', function() {
        if(document.getElementById('b0.8[3]').checked || document.getElementById('b0.4[3]').checked) {
            document.getElementById('b0.8[4]').disabled = true;
            document.getElementById('b0.8[5]').disabled = true;
            document.getElementById('b0.8[4]').checked = false;
            document.getElementById('b0.8[5]').checked = false;
            document.getElementById('b0.4[4]').disabled = true;
            document.getElementById('b0.4[5]').disabled = true;
            document.getElementById('b0.4[4]').checked = false;
            document.getElementById('b0.4[5]').checked = false;
        }else if(document.getElementById('b0.8[4]').checked || document.getElementById('b0.4[4]').checked) {
            document.getElementById('b0.8[3]').disabled = true;
            document.getElementById('b0.8[5]').disabled = true;
            document.getElementById('b0.8[3]').checked = false;
            document.getElementById('b0.8[5]').checked = false;
            document.getElementById('b0.4[3]').disabled = true;
            document.getElementById('b0.4[5]').disabled = true;
            document.getElementById('b0.4[3]').checked = false;
            document.getElementById('b0.4[5]').checked = false;
        }else if(document.getElementById('b0.8[5]').checked || document.getElementById('b0.4[5]').checked) {
            document.getElementById('b0.8[3]').disabled = true;
            document.getElementById('b0.8[4]').disabled = true;
            document.getElementById('b0.8[3]').checked = false;
            document.getElementById('b0.8[4]').checked = false;
            document.getElementById('b0.4[3]').disabled = true;
            document.getElementById('b0.4[4]').disabled = true;
            document.getElementById('b0.4[3]').checked = false;
            document.getElementById('b0.4[4]').checked = false;
        }else{
            document.getElementById('b0.8[3]').disabled = false;
            document.getElementById('b0.8[4]').disabled = false;
            document.getElementById('b0.8[5]').disabled = false;
            document.getElementById('b0.4[3]').disabled = false;
            document.getElementById('b0.4[4]').disabled = false;
            document.getElementById('b0.4[5]').disabled = false;
      }
    });
    });
  </script>
<!-- <script>
        $('#b1[3]').on('change', function(){
            $('#b1[4]').prop('disabled', true);
            $('#b1[5]').prop('disabled', true);
        });
        const radio = document.getElementById("b1[3]");
        radio.addEventListener("click", function(){
            document.getElementById("b1[4]").disabled = true;  
            document.getElementById("b1[5]").disabled = true;
        });
</script> -->
<?= $this->endSection(); ?>