<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Profil | Sandio PateCare</title>
    <!-- Ajax Swiper Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <!-- My Css -->
    <link rel="stylesheet" href="../assets/css/landing.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="../assets/css/customer.css">
    <link rel="stylesheet" href="../assets/css/keranjang.css">
    <link rel="stylesheet" href="../assets/css/checkout.css">
</head> 
<body>


    <section id="nav">
        <nav class="nav">
            <div class="logo"><a href="../index.php"><img src="../assets/img/landing/LOGO.png" alt="LOGO"></a></div>
            <div class="search-container">
                <form action="" method="get">
                    <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="tom-container">
                <a href="#"><div class="tom"><i class="fa-solid fa-book"></i></div></a>
                <a href="#"><div class="tom"><i class="fa-solid fa-cart-shopping"></i></div></a>
                <a href="../login"><div class="tom"><i class="fa-solid fa-user"></i></div></a>
            </div>
            <div class="con-ham"><div class="hamburger"><i class="fa-solid fa-bars"></i></div></div>
        </nav>
        <div class="nav-mobile">
            <div class="nav-mobile-container">
                <div class="tom-container-mobile">
                    <a href="login.php"><div class="tom"><i class="fa-solid fa-user"></i></div></a>
                    <a href="#"><div class="tom"><i class="fa-solid fa-cart-shopping"></i></div></a>
                    <a href="#"><div class="tom"><i class="fa-solid fa-book"></i></div></a>
                </div>
                <div class="con-close"><div class="close"><i class="fas fa-times"></i></div></div>
                <div class="search-container-mobile">
                    <form action="" method="get">
                        <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                        <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/nav.js"></script>

<?php
include "../config/koneksi.php";

session_start();

$file = basename($_SERVER["PHP_SELF"]);

if (!isset($_SESSION["customer_status"])) {
    // halaman yg dilindungi jika customer belum login
    $lindungi = ["customer.php", "logout.php"];

    // periksa halaman, jika belum login ke halaman di atas, maka alihkan halaman
    if (in_array($file, $lindungi)) {
        header("location:../index.php");
    }

    if ($file == "checkout.php") {
        header("location:../login.php?alert=login-dulu");
    }
} else {
    // halaman yg tidak boleh diakses jika customer sudah login
    $lindungi = ["../login.php", "../daftar.php"];

    // periksa halaman, jika sudah dan mengakses halaman di atas, maka alihkan halaman
    if (in_array($file, $lindungi)) {
        header("location:customer.php");
    }
}

if ($file == "checkout.php") {
    if (!isset($_SESSION["keranjang"]) || count($_SESSION["keranjang"]) == 0) {
        header("location:keranjang.php?alert=keranjang_kosong");
    }
}
?>