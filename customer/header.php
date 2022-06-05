<?php
include "../config/koneksi.php";

session_start();

$file = basename($_SERVER["PHP_SELF"]);

if (!isset($_SESSION["customer_status"])) {
    // halaman yg dilindungi jika customer belum login
    $lindungi = ["../customer/customer.php", "../keranjang/index.php", "customer/customer_logout.php"];

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
        header("location:../customer/customer.php");
    }
}

if ($file == "../checkout.php") {
    if (!isset($_SESSION["keranjang"]) || count($_SESSION["keranjang"]) == 0) {
        header("location:../keranjang/index.php?alert=keranjang_kosong");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PETCARE - </title>
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
</head> 
<body>


    
    <!--section id="nav">
        <nav class="nav">
            <div class="logo"><a href="index.php"><img src="assets/img/landing/LOGO.png" alt="LOGO"></a></div>
            <div class="search-container">
                <form action="" method="get">
                    <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="tom-container">

                <div class="tom-after" >
                    <div>
                    <a href="keranjang/"><i class="fa-solid fa-shopping-cart"></i></a> 
                    </div>
                    <div><span style="color:white;" >Keranjang</span></div>
                </div>

                <?php /*
                    if(isset($_SESSION['customer_status'])){
                    $id_customer = $_SESSION['customer_id'];
                    $customer = mysqli_query($koneksi,"select * from customer where customer_id='$id_customer'");
                    $c = mysqli_fetch_assoc($customer);
                    ?> 
                    <a class="tom-after" style="color:white;" href="login"><?php echo $c['customer_nama']; ?></a>
                     <?php
                }else{
                ?> 
                <a href="login"><div class="tom"><i class="fa-solid fa-user"></i></div></a> <?php
                }*/
                ?>
            </div>
            <div class="con-ham"><div class="hamburger"><i class="fa-solid fa-bars"></i></div></div>
        </nav>
        <div class="nav-mobile">
            <div class="nav-mobile-container">
                <div class="tom-container-mobile">
                    <a href="login.php"><div class="tom"><i class="fa-solid fa-user"></i></div></a>
                    <a href="keranjang/"><div class="tom"><i class="fa-solid fa-shopping-cart"></i></div></a>
                    <a href="#"><div class="tom"><i class="fas fa-th"></i></div></a>
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
    </section-->

    <style type="text/css">
        
 
 
    </style>

    <nav>
    <div class="containeru">
      <ul class="nav-list">
        <li class="nav-logo">
          <div class="logo">
            <a href="../index"><img src="../assets/img/landing/LOGO.png" width="110px" alt="LOGO"></a>
          </div>

          <button class="btn" id="nav-toggle">
          <i class="fa fa-bars"></i></button>
        </li>
        <div class="search-container nav-item">
                <form action="" method="get">
                    <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        <!--li class="nav-link">Keranjang<i class="fa fa-chevron-up"></i>
          <ul class="nav-drop">
            <li>Portfolio</li>
            <li>Showcase</li>
          </ul>
        </li-->
        <li class="nav-link">
            <a class="btn" href="../keranjang/"><i class="fa-solid fa-shopping-cart"></i> Keranjang</a>
        </li>
        <li class="nav-link"><?php
                    if(isset($_SESSION['customer_status'])){
                    $id_customer = $_SESSION['customer_id'];
                    $customer = mysqli_query($koneksi,"select * from customer where customer_id='$id_customer'");
                    $c = mysqli_fetch_assoc($customer);
                    ?> 
                    <a class="btn" href="login"><i class="fa-solid fa-user"></i> <?php echo $c['customer_nama']; ?></a>
                    <ul class="nav-drop">
                        <li><a href="customer">Akun Saya</li>
                        <li><a href="../keranjang">Pesanan Saya</li>
                        <li><a href="">Ganti Password</li>
                        <li><a href="logout"> Logout</li></a>
                    </ul>
                     <?php
                }else{
                ?> 
                 <a class="btn" href="../login">Masuk</a> <?php
                }
                ?>
        </li>
        
      </ul>
    </div>
  </nav>


    <script src="../assets/js/nav.js"></script>

