<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1">
<h2>Edit Profile</h2>

<div class="container">
        <div class="row">
            <!-- <div class="col-md-6">
                <img src="https://picsum.photos/200/200" alt="Foto Profil" class="img-fluid img-thumbnail rounded-circle border">
            </div> -->
            <div class="col-md-6">
            <form action="<?= base_url('/user/profile/') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
    <!-- Sisanya formulir tetap sama -->
                    <div class="form-group">
                        <label for="username">Nama:</label>
                        <input type="text" name="username" id="username" class="form-control" value="<?= $profile['username'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $profile['email'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $profile['alamat'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No HP:</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $profile['no_hp'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="foto">Foto Profil:</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
        <?= $this->endSection(); ?>