<?= $this->extend('user/layouts/app'); ?>
<?= $this->section('content'); ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php foreach($product as $p){ ?>
                <div class="col-md-3 mb-4">
                    <div class="card text-center" id="product-card-1">
                        <img src="<?= $p['foto_product'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3"><?= $p['nama_product'] ?></h5>
                            <p><?= $p['category'] ?></p>
                            <h6 class="mb-3">Rp.<?= $p['harga_product'] ?></h6>
                        </div>
                        <a href="<?= base_url("user/product/".$p['id']) ?>" class="btn btn-primary btn-block" style="border-radius: 0px 0px 15px 15px;">Detail</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?= $this->endSection(); ?>