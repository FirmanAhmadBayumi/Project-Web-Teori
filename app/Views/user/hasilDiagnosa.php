<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1" style="border-radius: 20px;">
    <h1 class="text-center">Hasil</h1>
    <div class="section-body">

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body text-center">
                        <p>
                            <h1><?= $hasil['nama'] ?></h1>
                            <p><?= $hasil['deskripsi'] ?></p>
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>