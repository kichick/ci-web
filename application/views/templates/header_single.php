<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/single_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/single_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">
                                    <?php if ($this->session->userdata('email')) : ?>
                                        <li class="account">
                                            <a href="#">
                                                <?= $user['nama']; ?>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                            <ul class="account_selection">
                                                <li><a href="<?= base_url('home/profil'); ?>">Profile</a></li>
                                                <li><a href="<?= base_url('home/dashboard'); ?>">Dashboard</a></li>
                                                <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                                            </ul>
                                        </li>
                                    <?php else : ?>
                                        <li class="account">
                                            <a href="#">
                                                My Account
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="account_selection">
                                                <li><a href="<?= base_url('auth'); ?>">Sign In</a></li>
                                                <li><a href="<?= base_url('auth/register'); ?>">Register</a></li>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="<?= base_url('home') ?>">LOWAK<span>Shop</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li><a href="<?= base_url('home/shop') ?>">Shop</a></li>
                                    <li><a href="<?= base_url('home/jual') ?>">Sell</a></li>
                                    <li><a href="<?= base_url('home/kontak') ?>">contact</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="<?= base_url('auth') ?>"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="<?= base_url('cart') ?>">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items"><?= $this->cart->total_items(); ?></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <a class="menu_item has-children">
                        <a href="#">
                            My Account
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="]">Sign In</a></li>
                            <a><a href="">Register</a></a>
                        </ul>
                    </a>
                    <li class="menu_item"><a href="<?= base_url('home') ?>">home</a></li>
                    <li class="menu_item"><a href="<?= base_url('home/shop') ?>">shop</a></li>
                    <li class="menu_item"><a href="<?= base_url('home/jual') ?>">sell</a></li>
                    <li class="menu_item"><a href="<?= base_url('home/kontak') ?>">contact</a></li>
                </ul>
            </div>
        </div>