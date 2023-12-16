<?= $this->extend('user/layouts/app2'); ?>
<?= $this->section('contentpage'); ?>

    <!-- start banner -->
    <div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('/assets/img/carousel-1.jpeg') ?>" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('/assets/img/carousel-2.png') ?>" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('/assets/img/carousel-3.jpeg') ?>" alt="New York" class="d-block w-100">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

    </div>
    <!-- end banner -->

    <!-- start appoinment section -->
    <div class="container" style="margin-top:100px;">
        <div class="row align-items-center">
            <div class="col">
                <img src="<?= base_url('assets/img/appoinmentImg.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
            <p style="text-align: justify">
                    Selamat datang di <b>SiProfit</b>, tempat di mana keputusan investasi Anda menjadi lebih cerdas dan terarah. Kami menawarkan solusi inovatif dengan teknologi terkini untuk membantu Anda merinci profil risiko investasi secara akurat. Dengan memahami tingkat kenyamanan, tujuan keuangan, dan horizon investasi Anda, sistem kami menyajikan proses mudah dan transparan, memberikan panduan personal dan relevan. Jangan biarkan kompleksitas investasi membuat Anda ragu. Bersama kami, Anda akan memiliki alat yang dapat diandalkan untuk membuat keputusan investasi yang lebih cerdas, meraih kesuksesan investasi dengan keyakinan yang lebih besar. Selamat menjelajahi peluang investasi dan merencanakan masa depan finansial Anda!
                </p>
                <a href="<?= base_url('/user/services') ?>" class="btn btn-info" style="color:whitesmoke; padding:8px;">Jelajahi Sekarang!</a>
                <link href="<?= base_url("sb-admin-2/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                  rel="stylesheet">
                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
                <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 
            </div>
        </div>
    </div>
    <!-- end appoinment section -->

    <!-- start our services section -->
    <div class="wrapper">
        <div class="container text-center">
            <h2>Our Services</h2>
            <div class="row cards justify-content-center" style="width:100%">
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body"> 
                            <img src="<?= base_url('/assets/img/service-1.jpg') ?>" alt="" class="icon" style="width:130px; height:100px">
                            <h5 class="card-title">Profilasi Risiko Personal</h5>
                            <p class="card-text" >Sistem ini menyediakan analisis mendalam terhadap toleransi risiko investor. Melalui kuesioner dan evaluasi, investor dapat memahami sejauh mana mereka siap menghadapi fluktuasi pasar dan menentukan tingkat risiko yang sesuai dengan profil keuangan pribadi mereka. Hasil dari profilasi ini digunakan sebagai dasar untuk menyusun strategi investasi yang sesuai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/service-2.jpg') ?>" alt="" class="icon" style="width:130px; height:100px">
                            <h5 class="card-title">Pemantauan Kinerja</h5>
                            <p class="card-text">Layanan ini melibatkan pemantauan dan evaluasi kinerja portofolio investasi secara berkala. Investor dapat dengan mudah melacak perkembangan investasi mereka, memantau hasil investasi, dan memahami bagaimana portofolio mereka berkinerja seiring waktu. Informasi ini membantu investor untuk membuat keputusan yang lebih terinformasi dan dapat merespon perubahan pasar dengan cepat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/service-3.jpg') ?>" alt="" class="icon" style="width:130px; height:100px">
                            <h5 class="card-title">Edukasi dan Informasi</h5>
                            <p class="card-text">Sistem menyediakan materi edukasi terkait investasi dan risiko. Ini mencakup informasi pasar keuangan terkini dan berita yang dapat mempengaruhi keputusan investasi. Dengan memberikan sumber daya ini, sistem membantu meningkatkan pemahaman investor tentang dinamika pasar, memungkinkan mereka membuat keputusan investasi yang lebih cerdas dan berbasis pengetahuan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_link" style="margin-top:50px;">
                <a href="<?= base_url('/user/services') ?>">See the details</a>
            </div>
        </div>
    </div>
    <!-- end our services section -->

<?= $this->endSection(); ?>
