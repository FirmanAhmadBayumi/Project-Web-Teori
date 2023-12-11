<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Form Edit Skala</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/product/'.$p['id_skala'])?>" method="POST"  enctype="multipart/form-data">
    <?= csrf_field() ?>
   <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <br>
    <label for="nama">Nama Skala</label>
    <input type="text" name="nama" value="<?= $p['nama'] ?>" class="form-control <?php if (session()->getFlashdata('error_nama')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_nama')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama') ?>
              </div>
            <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="stok_product">Deskripsi Skala</label>
    <textarea name="deskripsi" class="form-control" >
    <?= $p['deskripsi'] ?>
    </textarea>
            <?php if (session()->getFlashdata('error_stok_product')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_stok_product') ?>
              </div>
            <?php endif; ?>

  </div>
  
  <div class="form-group">
    <div class="row">
 
    <div class="col">
    
  </input>
    </div>
    </div>
    
  </div>

  <br>
  <a href="/admin/product/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 