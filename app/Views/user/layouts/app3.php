<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/css/form.css") ?>">
    <link href="<?= base_url("sb-admin-2/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

    <!-- start navbar -->
    <!-- <nav class="navbar">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#" style="font-size:32px;">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2020/09/01/Dog-paw-vector-icon-logo-design-heart-Graphics-5223218-1-1-580x387.jpg"
                alt="Logo" width="70" height="50" class="d-inline-block align-text-top" style="margin-right:-20px; margin-top: -5px;">
                PetCare
            </a> -->
            <nav class="navbar">
        <div class="container-fluid" >
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <ul class="nav nav-underline justify-content-end" style="font-size: 35px;">
                <div class="sidebar-brand-icon rotate-n-30">
                    <img src="<?= base_url('assets/img/logo-invesment.jpg') ?>" alt="" style="width:50px; height:30px">
                </div>
                <div class="sidebar-brand-text mx-100"><b>SiProfit</b></div>
            </ul>
            </a>



            <ul class="nav nav-underline justify-content-end" style="font-size: 18px;">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("user/") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("user/services") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("user/product") ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("logout") ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->
    <div class="navbar-extend"></div>

    <?= $this->renderSection('content') ?>

    <!-- start footer -->
    <footer class="text-dark text-center py-3">
        <div class="container">
            <p>&copy; 2023 PetCare. All rights reserved.</p>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html>