<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- PAGE NAME -->
    <title>Denah Pengabdi Kangsa Pertiwi</title>

    <!-- TAB ICON -->
    <link rel="shortcut icon" type="x-icon" href="<?= ROOT_URL ?>assets/icon/tab_icon.png">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/new.css">

    <!-- BOX ICONS LINK -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- REMIX ICONS LINK -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONTS LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu' id="menu-icon"></i>
            <div class="logo"><a href="#"><img src="<?= ROOT_URL ?>assets/icon/tunas_biru.png" alt="nav_logo"></a><span>DEDIKASI</span></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name"><span><img src="<?= ROOT_URL ?>assets/icon/tunas_putih.png" alt=""></span>DEDIKASI</span>
                    <i class='bx bx-x' id="close-icon"></i>
                </div>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li>
                        <a href="#">Program</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="#">Self Funded</a></li>
                            <li class="more">
                                <span><a href="#">Funded</a>
                                <i class='bx bxs-chevron-right arrow more-arrow'></i>
                            </span>
                            <ul class="more-sub-menu sub-menu">
                                <li><a href="#">Regular</a></li>
                                <li><a href="#">Premium</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Article</a></li>
            </ul>
        </div>
        <div class="button">
            <a href="#">Login→</a>
        </div>
    </div>
</nav>