<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1">
<h2>Detail Profile</h2>

<form action="<?= base_url('user/edit_profile')?>" method="POST">
<div class="col-md-6">
        <img src="<?= base_url('assets/img/...' . $profile["foto"]) ?>" alt="Foto Profil" class="img-fluid img-thumbnail rounded-circle border">
    </div>
    <!-- <div class="d-flex justify-content-center">
    <div class="col-md-6">
        <img src="https://picsum.photos/200/200" alt="Foto Profil" class="img-fluid img-thumbnail rounded-circle border">
    </div>
    </div> -->

    <div class="form-group">
        <label for="username">Nama: <?=$profile["username"] ?> </label>
    </div>

    <div class="form-group">
        <label for="email">Email: <?=$profile["email"] ?> </label>
    </div>
    <div class="form-group">
                <label for="alamat">Alamat: <?=$profile["alamat"] ?> </label>
            </div>

            <div class="form-group">
                <label for="no_hp">No HP: <?=$profile["no_hp"] ?></label>
            </div>
            <div class="form-group">
                <a href="<?= base_url('user/editprofile') ?>" class="btn btn-primary">Edit</a>
            </div>




    


</div>
        <?= $this->endSection(); ?>