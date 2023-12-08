<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-petcare">Form Tambah service</h6>
    </div>
    <div class="card-body">
        <form action="<?=base_url('/admin/service/'.$inv['id'])?>" method="POST"  enctype="multipart/form-data">
            <div class="form-group"><br>
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
    <label for="nama">Nama service</label>
    <input type="text" name="nama_service" class="form-control <?php if (session()->getFlashdata('error_nama_service')) echo 'is-invalid'; ?>" value="<?= $inv['nama_service']; ?>">
            <?php if (session()->getFlashdata('error_nama_service')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama_service') ?>
              </div>
            <?php endif; ?>
  </div>
  <br>
  <a href="/admin/service/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>

<?= $this->endSection(); ?> 