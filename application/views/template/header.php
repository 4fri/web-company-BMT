<!doctype html>
<html lang="en">

<head>
    <title>BMT &mdash; Bina Mandiri Teknik</title>
    <link rel="icon" href="<?= base_url('assets/images/logofix2.png') ?>" type="image/x-icon" sizes="300x300">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">





    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="<?= base_url('home/redirect/home') ?>" class="mb-0">Bina Mandiri Teknik</a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="nav-item">
                                    <a href="<?= base_url('home/redirect/home') ?>" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item has-children">
                                    <a href="#about-section" class="nav-link">About Us</a>
                                    <ul class="dropdown">
                                        <li class="nav-item">
                                            <a href="#team-section" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="go_structure()">Structure Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('home/faq') ?>" class="nav-link">FAQ</a>
                                        </li>
                                        <!-- <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="#services-section" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('home/gallery') ?>" class="nav-link">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('home/blog') ?>" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#contact-section" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>
    </div>
</body>
<script>
    function go_structure() {
        window.location.href = "<?= base_url('home/structure') ?>";
    };
</script>