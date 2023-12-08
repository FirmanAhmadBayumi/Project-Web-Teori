<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-petcare">Form Tambah Product</h6>
</div>
<div class="card-body">
    <form action="<?=base_url('/admin/product/'.$p['id'])?>" method="POST"  enctype="multipart/form-data">
    <?= csrf_field() ?>
   <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <br>
    <label for="nama">Nama Product</label>
    <input type="text" name="nama_product" value="<?= $p['nama_product'] ?>" class="form-control <?php if (session()->getFlashdata('error_nama_product')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_nama_product')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama_product') ?>
              </div>
            <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="stok_product">Stok Product</label>
    <input type="int" name="stok_product" value="<?= $p['stok_product'] ?>" class="form-control <?php if (session()->getFlashdata('error_stok_product')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_stok_product')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_stok_product') ?>
              </div>
            <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="harga_product">Harga Product</label>
    <input type="int" name="harga_product" value="<?= $p['harga_product'] ?>" class="form-control <?php if (session()->getFlashdata('error_harga_product')) echo 'is-invalid'; ?>" >
            <?php if (session()->getFlashdata('error_harga_product')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_harga_product') ?>
              </div>
            <?php endif; ?>
  </div>
  <div class="form-group">
    <div class="row">
  <div class="col">
                <img src="<?= isset($p['foto_product']) ? $p['foto_product'] : base_url('assets/img/rawr.jpg') ?>" class="img-thumbnail" width="300px">
    </div>
    <div class="col">
    <label for="foto_product">Foto Product</label>
    <input type="file" class="form-control <?php if (session()->getFlashdata('error_foto_product')) echo 'is-invalid'; ?>"  name="foto_product" aria-label="Default select example">
    <?php if (session()->getFlashdata('error_foto_product')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_foto_product') ?>
              </div>
            <?php endif; ?>
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