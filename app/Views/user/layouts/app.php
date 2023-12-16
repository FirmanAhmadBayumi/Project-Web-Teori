<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si Profit</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>">
    <!-- Include Poppins font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">
    <!-- Blue navbar at the top (fixed) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <span style="background: linear-gradient(135deg, #FF0000, #FFFFFF); -webkit-background-clip: text; color: transparent; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">SiProfit</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home" style="color: black">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#modul" style="color: black">Konsultasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#solve" style="color: black">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>" style="color: black">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Rest of your content -->

    <!-- Image slider in the "home" section -->
    <section id="home">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/carousel-1.jpeg') ?>" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel-2.png') ?>" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/carousel-3.jpeg') ?>" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <?= $this->renderSection('contentpage') ?>

    

    <footer class="text-center py-3">
        <p>&copy; 2023 SiProfit</p>
    </footer>

    <!-- Include Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include your custom JavaScript for the scrolling effect (see below) -->
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
