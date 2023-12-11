<?= $this->extend('user/layouts/app'); ?>
<?= $this->section('content'); ?>


    <div class="container-fluid" style="padding:50px; margin-top:100px">
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

    <div class="wrapper" style="background:salmon;">
    <div class="container text-center;">
        <h2>Jenis investasi</h2>
        <div class="row cards justify-content-center" style="width:100%;">
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Syariah Konservatif</h3>
                        <p class="card-text">Syariah Konservatif adalah interpretasi tertentu terhadap hukum Islam (syariah) 
                            yang cenderung mempertahankan nilai-nilai tradisional dan konservatif dalam kerangka pemahaman 
                            agama Islam. Pendekatan ini didasarkan pada interpretasi konservatif terhadap ajaran Islam dan 
                            menekankan pemeliharaan nilai-nilai dan norma-norma yang dianggap berasal dari ajaran agama.</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan syariah konservatif:</p>
                        <ul>
                            <li><h6>Kepatuhan Terhadap Hukum Islam Tradisional</h6></li>
                            <p>Pendekatan ini menekankan pada kepatuhan terhadap hukum Islam yang 
                                telah lama diterima dan dipraktikkan secara tradisional</p>
                            <li><h6>Penekanan pada Nilai-Nilai Keluarga dan Moralitas</h6></li>
                            <p>Syariah konservatif sering menekankan pentingnya nilai-nilai keluarga dan moralitas dalam kehidupan sehari-hari</p>
                            <li><h6>Pendekatan Konservatif terhadap Perubahan Sosial</h6></li>
                            <p>Pendekatan ini mungkin cenderung skeptis terhadap perubahan sosial yang dianggap bertentangan dengan nilai-nilai tradisional Islam</p>
                        </ul>
                        <p>Bagi pengguna syariah konservatif terdapat variasi dalam pemahaman dan praktik syariah di seluruh 
                            dunia Muslim, dan perspektif konservatif hanyalah salah satu dari berbagai pendekatan yang 
                            ada. Pemahaman dan implementasi syariah dapat sangat bervariasi antara kelompok dan komunitas 
                            Muslim.</p>  
                    </div>
                </div>
            </div>
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Syariah Moderate</h3>
                        <p class="card-text">Syariah Moderate mengacu pada pendekatan investasi yang sejalan dengan prinsip-prinsip syariah Islam, namun memiliki tingkat risiko dan potensi imbal hasil yang moderat.</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan syariah moderate:</p>
                        <ul>
                            <li><h6>Diversifikasi Portofolio</h6></li>
                            <p>Investasi dilakukan dalam berbagai instrumen keuangan yang mematuhi prinsip syariah dan diversifikasi membantu mengurangi risiko secara keseluruhan</p>
                            <li><h6>Moderate Risk Profile</h6></li>
                            <p>Portofolio dirancang untuk memiliki tingkat risiko yang moderat dan pilihan investasi biasanya mencakup saham syariah, obligasi syariah, dan instrumen keuangan lain yang sesuai dengan prinsip syariah</p>
                            <li><h6>Edukasi dan Penelitian</h6></li>
                            <p>Investor diharapkan memiliki pemahaman yang cukup tentang prinsip-prinsip syariah dan cara mereka diterapkan dalam investasi dan dilakukan penelitian yang cermat sebelum melakukan investasi untuk memastikan bahwa instrumen keuangan yang dipilih sesuai dengan pedoman syariah</p>
                        </ul>
                        <p>Bagi pengguna syariah moderate pemahaman dan praktik syariah di seluruh 
                            dunia Muslim, dan perspektif konservatif hanyalah salah satu dari berbagai pendekatan yang 
                            ada. Pemahaman dan implementasi syariah dapat sangat bervariasi antara kelompok dan komunitas 
                            Muslim.</p>  
                    </div>
                </div>
            </div>
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Syariah Agresif</h3>
                        <p class="card-text">Syariah Agresif adalah pendekatan investasi yang mematuhi prinsip-prinsip syariah Islam dan pada saat yang sama memiliki tingkat risiko yang tinggi. Dalam skala ini, investor cenderung mencari peluang keuntungan yang lebih besar dengan mengambil risiko yang lebih tinggi</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan syariah agresif:</p>
                        <ul>
                            <li><h6>Tingkat Risiko Tinggi</h6></li>
                            <p>Strategi ini melibatkan tingkat risiko yang tinggi, dengan fokus pada instrumen investasi
                            yang memiliki potensi keuntungan besar, namun juga dapat mengalami fluktuasi harga yang
                            signifikan.
                            </p>
                            <li><h6>Portofolio Saham Berisiko Tinggi</h6></li>
                            <p>Investor cenderung memasukkan saham syariah berisiko tinggi dalam portofolio mereka. Saham ini biasanya terkait dengan industri atau sektor yang memiliki potensi pertumbuhan tinggi, tetapi juga rentan terhadap volatilitas pasar</p>
                            <li><h6>Investasi pada Sektor-Sektor Inovatif dan Berkembang</h6></li>
                            <p>Fokus pada sektor-sektor inovatif dan berkembang dalam ekonomi, yang memiliki potensi pertumbuhan yang lebih tinggi, seperti teknologi, energi terbarukan, atau industri kreatif.</p>
                        </ul>
                        <p>Bagi pengguna syariah agresif, Konsistensi, adaptabilitas, dan kesabaran menjadi kunci kesuksesan dalam mengelola investasi dengan profil risiko tinggi yang sesuai dengan prinsip-prinsip syariah</p>  
                    </div>
                </div>
            </div>
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Konvensional Konservatif</h3>
                        <p class="card-text">konvensional konservatif adalah pendekatan investasi yang berfokus pada instrumen keuangan dengan tingkat risiko yang relatif rendah</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan konvensional konservatif:</p>
                        <ul>
                            <li><h6>Alokasi pada Instrumen yang Stabil dan Konservatif</h6></li>
                            <p>Portofolio investasi cenderung didominasi oleh instrumen keuangan yang dianggap stabil dan konservatif, seperti obligasi pemerintah, deposito berjangka, atau saham dari perusahaan dengan rekam jejak kestabilan yang tinggi
                            </p>
                            <li><h6>Pendekatan Risiko Rendah</h6></li>
                            <p>Investor mengutamakan pelestarian modal dan menghindari risiko besar. Oleh karena itu, strategi investasi lebih berorientasi pada perlindungan terhadap potensi kerugian daripada pencarian keuntungan maksimal</p>
                            <li><h6>Imbal Hasil yang Moderat hingga Rendah</h6></li>
                            <p>Meskipun potensi pertumbuhan mungkin ada, imbal hasil cenderung moderat hingga rendah. Investor konservatif lebih memilih kenyamanan dan stabilitas daripada mengejar hasil yang lebih tinggi dengan tingkat risiko yang lebih besar</p>
                        </ul>
                        <p>Bagi pengguna konvensional konservatif, sesuaikan jangka waktu investasi dengan kebutuhan dan toleransi risiko, hindari instrumen berisiko tinggi, dan lakukan pemantauan berkala terhadap portofolio</p>  
                    </div>
                </div>
            </div>
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Konvensional Moderate</h3>
                        <p class="card-text">Konvensional Moderate adalah pendekatan investasi yang menempati posisi tengah antara pendekatan konservatif dan agresif. Dalam skala ini, investor cenderung mencari keseimbangan antara pertumbuhan investasi dan risiko</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan konvensional Moderate:</p>
                        <ul>
                            <li><h6>Diversifikasi Portofolio</h6></li>
                            <p>Strategi investasi cenderung mencakup diversifikasi portofolio dengan penempatan dana pada berbagai kelas aset, seperti saham, obligasi, dan mungkin instrumen keuangan lainnya</p>
                            <li><h6>Tingkat Risiko dan Imbal Hasil yang Seimbang</h6></li>
                            <p>Fokus pada mencapai keseimbangan antara risiko dan imbal hasil. Investasi tidak terlalu agresif atau terlalu konservatif, dengan tujuan mendapatkan pertumbuhan moderat sambil membatasi potensi kerugian</p>
                            <li><h6>Pendekatan Jangka Menengah hingga Panjang</h6></li>
                            <p>Investasi biasanya diarahkan pada jangka waktu menengah hingga panjang, memungkinkan waktu bagi portofolio untuk tumbuh sambil menanggung fluktuasi pasar jangka pendek</p>
                        </ul>
                        <p>Untuk pengguna konvensional moderate, Fleksibilitas dalam strategi investasi, pemantauan berkala untuk penyesuaian, dan perhatian terhadap jangka waktu investasi juga menjadi aspek penting</p>  
                    </div>
                </div>
            </div>
            <div class="col-xll-4 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" style="border-radius: 20px;">
                    <div class="card-body" style="text-align: left">
                        <h3 class="card-title" >Konvensional Agresif</h3>
                        <p class="card-text">konvensional agresif adalah pendekatan investasi yang cenderung mengambil risiko yang tinggi dengan harapan memperoleh keuntungan yang signifikan. Karakteristik skala ini melibatkan pemilihan instrumen keuangan dengan potensi pertumbuhan yang lebih tinggi namun juga rentan terhadap volatilitas pasar yang tinggi.</p>
                        <p>Berikut beberapa ciri yang sering terkait dengan konvensional Agresif:</p>
                        <ul>
                            <li><h6>Alokasi yang Tinggi pada Saham</h6></li>
                            <p>Investor cenderung mengalokasikan sebagian besar portofolio mereka pada saham. Ini mencakup saham dari perusahaan berisiko tinggi dan sektor-sektor dengan potensi pertumbuhan yang besar</p>
                            <li><h6>Tingkat Risiko yang Tinggi</h6></li>
                            <p>Pendekatan ini melibatkan tingkat risiko yang tinggi, dengan fokus pada instrumen investasi yang dapat mengalami fluktuasi harga yang signifikan dalam jangka waktu pendek</p>
                            <li><h6>Jangka Waktu Investasi yang Panjang</h6></li>
                            <p>Investor agresif memiliki jangka waktu investasi yang panjang, dengan harapan bahwa fluktuasi pasar jangka pendek akan diimbangi oleh pertumbuhan jangka panjang</p>
                        </ul>
                        <p>Bagi pengguna konvensional agresif, Penting untuk tetap bersikap fleksibel, menghindari keputusan berdasarkan emosi pasar, dan memperhatikan biaya transaksi</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>