<?= $this->extend('user/layouts/app'); ?>
<?= $this->section('content'); ?>


    <div class="container-fluid" style="padding:50px;">
        <div class="row align-items-center">
            <div class="col">
                <img id="img-service" src="<?= base_url('/assets/img/profilisasi.png') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
                <h3>Profilasi Risiko Personal</h3>
                <p>Melalui kuesioner dan evaluasi, anda diharapkan dapat memahami sejauh mana anda siap menghadapi fluktuasi pasar dan menentukan tingkat risiko yang sesuai dengan profil keuangan pribadi mereka. Hasil dari profilasi ini digunakan sebagai dasar untuk menyusun strategi investasi yang sesuai.</p>
                <a href="<?= base_url("user/formlayanan") ?>" class="btn btn-info" style="color: whitesmoke; padding: 8px; text-decoration: none;">Make an Appointment Now!</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background:salmon; padding:50px;">
        <div class="row align-items-center">
            <div class="col text-end">
                <h3>Pemantauan Kinerja</h3>
                <p>Layanan ini melibatkan pemantauan dan evaluasi kinerja portofolio investasi anda secara berkala. Investor dapat dengan mudah melacak perkembangan investasi mereka, memantau hasil investasi, dan memahami bagaimana portofolio mereka berkinerja seiring waktu.</p>
                <a href="<?= base_url("user/formlayanan") ?>" class="btn btn-info" style="color: whitesmoke; padding: 8px; text-decoration: none;">Make an Appointment Now!</a>
            </div>
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/pemantauan.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding:50px;">
        <div class="row align-items-center">
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/edukasi.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
                <h3>Edukasi dan Informasi</h3>
                <p>Layanan ini mencakup informasi pasar keuangan terkini dan berita yang dapat mempengaruhi keputusan investasi. Dengan memberikan sumber daya ini, sistem membantu meningkatkan pemahaman investor tentang dinamika pasar, memungkinkan mereka membuat keputusan investasi yang lebih cerdas dan berbasis pengetahuan.</p>
                <a href="<?= base_url("user/formlayanan") ?>" class="btn btn-info" style="color: whitesmoke; padding: 8px; text-decoration: none;">Make an Appointment Now!</a>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>