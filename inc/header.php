<?php include('functions.php'); include('../conn.php'); ?>
<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>iRaffle TV - Deportes En Vivo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="iRaffle TV - Transmisiones Deportivas en HD" />
    <meta name="keywords" content="futbol, basketball, mlb, nfl, tenis, tv, acb, uefa, champions, europa, laliga, premier, serie a, bundesliga" />
    <meta name="author" content="iRaffle" />
    <link rel="shortcut icon" href="<?=$app?>img/favicon.ico">
    <link rel="stylesheet" href="<?=$app?>css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/main.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/events.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/slider.css" type="text/css">
    <link rel="stylesheet" href="<?=$app?>css/styles.css" type="text/css">
    <script src="<?=$app?>js/modernizr.custom.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174658361-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-174658361-1');
    </script>
</head>

<body class="page">

    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

            <!-- Header -->
            <header id="site_header" class="header">
                <div class="header-content clearfix">

                    <!-- Text Logo -->
                    <div class="text-logo">
                        <a href="<?=$app?>">
                            <img class="logo-symbol" width="48px" src="<?=$app?>img/logo-white.png" alt="">
                            <div class="logo-text">iRaffle <span>TV</span></div>
                        </a>
                    </div>
                    <!-- /Text Logo -->

                    <!-- Navigation -->
                    <div class="site-nav mobile-menu-hide">
                        <ul class="leven-classic-menu site-main-menu">
                            <li class="menu-item <?php if ($actual_link == $app) { echo "current-menu-item"; } ?>">
                                <a href="<?=$app?>">Inicio</a>
                            </li>
                            <li class="menu-item <?php if (strpos($actual_link, "futbol")) { echo "current-menu-item"; }?>">
                                <a href="<?=$app?>futbol">Fútbol</a>
                            </li>
                            <li class="menu-item <?php if (strpos($actual_link, "basket")) { echo "current-menu-item"; }?>">
                                <a href="<?=$app?>basket">Basketball</a>
                            </li>
                            <li class="menu-item <?php if (strpos($actual_link, "tv")) {
                                if (isset($_GET['futbol']) || isset($_GET['basket']) || isset($_GET['id'])) {
                                    // nada
                                } else {
                                echo "current-menu-item";}
                                }?>">
                                <a href="<?=$app?>tv">TV</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <a class="menu-toggle mobile-visible">
                        <i class="fa fa-bars"></i>
                    </a>
                    <!-- Mobile Menu Toggle -->
                </div>
            </header>
            <!-- /Header -->