<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('contentpage'); ?>
<br><br><br><br><br>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h1>Hasil Konsultasi</h1>
        </div>
        <div class="card-body text-center">
            <h3 class="card-title">
                <b><?= $hasil['nama'] ?></b>
            </h3>
            <p class="card-text">
                <?= $hasil['deskripsi'] ?>
            </p>
        </div>
        <div class="card-header text-center">
            <h1>Saran</h1>
        </div>
        <div class="card-body">
            <p class="card-text">
                <?= $hasil['saran'] ?>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>