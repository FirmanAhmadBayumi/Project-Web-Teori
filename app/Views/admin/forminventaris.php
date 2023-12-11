<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>

<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-petcare">Form Tambah Kriteria</h6>
                                </div>
                                <div class="card-body">
    <form action="<?=base_url('/admin/inventaris/store')?>" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <br>
    <label for="nama">Nama Kriteria</label>
    <input type="text" name="nama_inventaris" class="form-control <?php if (session()->getFlashdata('error_nama_inventaris')) echo 'is-invalid'; ?>" value="<?= old('nama_inventaris'); ?>">
            <?php if (session()->getFlashdata('error_nama_inventaris')) : ?>
              <div class="invalid-feedback">
                <?= session()->getFlashdata('error_nama_inventaris') ?>
              </div>
            <?php endif; ?>
  </div>
  <div class="form-group">
    <br>
    <label for="skala">Skala : </label>
    <select name="skala" id="skala" class="form-select">
    <option selected>Skala</option>
    <?php foreach($skala as $sk){?>
      <option value="<?= $sk['id_skala'] ?>"><?= $sk['nama'] ?></option>
      <?php } ?>
    </select>
  </div>

  <br>
  <a href="/admin/inventaris/" class="btn btn-warning">Kembali</a>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
                                </div>
                            </div>
<?= $this->endSection(); ?> 