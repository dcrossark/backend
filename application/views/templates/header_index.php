<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/bercoding3.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/bercoding3.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center">
                    <a href="<?= base_url() ?>" class="logo mr-auto"><img src="<?= base_url(); ?>assets/img/bercoding4.png" alt="" class="img-fluid"></a>
                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="#hero">Home</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#services">Layanan</a></li>
                            <li><a href="#portfolio">Portofolio</a></li>
                            <li class="drop-down"><a href="#">Kursus</a>
                                <ul>
                                    <li><a href="<?= base_url('bercoding/dev'); ?>">Web Development</a></li>
                                    <li><a href="<?= base_url('bercoding/desk'); ?>">Desktop App Development</a></li>
                                    <li><a href="<?= base_url('bercoding/database'); ?>">Database Management</a></li>
                                    <li><a href="<?= base_url('bercoding/framework'); ?>">Framework Tutorials</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Hubungi Kami</a></li>
                        </ul>
                    </nav>
                    <!-- .nav-menu -->

                    <a href="<?= base_url('bercoding/login'); ?>" class="get-started-btn scrollto"><i class="bx bx-user-circle"></i></a>
                </div>
            </div>

        </div>
    </header>
    <!-- End Header -->