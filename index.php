<?php
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <!-- Ajax Swiper Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <!-- My Css -->
    <link rel="stylesheet" href="assets/css/landing.css">

</head>
<body>
    <section id="nav">
        <nav class="nav">
            <div class="logo"><a href="index.php"><img src="assets/img/landing/LOGO.png" alt="LOGO"></a></div>
            <div class="search-container">
                <form action="" method="get">
                    <input type="text" name="keyword" class="kol-search" placeholder="Cari...">
                    <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="tom-container">
                <a href="#"><div class="tom"><i class="fa-solid fa-book"></i></div></a>
                <a href="#"><div class="tom"><i class="fa-solid fa-basket-shopping"></i></div></a>
                <a href="login.php"><div class="tom"><i class="fa-solid fa-user"></i></div></a>
            </div>
            <div class="con-ham"><div class="hamburger"><i class="fa-solid fa-bars"></i></div></div>
        </nav>
    </section>
    <section id="banner">
        <div class="container-slide">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img class="img-slider" src="assets/img/landing/banner1.jpg"></div>
                    <div class="swiper-slide"><img class="img-slider" src="assets/img/landing/banner2.jpg"></div>
                    <div class="swiper-slide"><img class="img-slider" src="assets/img/landing/banner3.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="assets/js/swiper.js"></script>
    </section>
    <section id="produk-terbaru">
        <div class="produk-container">
            <h1>Produk Terbaru</h1>
            <div class="produk-list">
                <?php
                $ambildata = mysqli_query($koneksi,"SELECT * FROM produk");
                // search
                if (isset($_GET["search"])){
                    $keyword = $_GET["keyword"];
                    $ambildata = mysqli_query($koneksi,"SELECT * FROM produk WHERE
                                    produk_nama LIKE '%$keyword%' OR
                                    produk_kategori LIKE '%$keyword%'");
                }
                while ($tampil = mysqli_fetch_array($ambildata)){
                ?>
                <div class="produk-box">
                    <a href="#"><div>
                        <img src="./assets/img/landing/landing/produk/<?=$tampil['img']?>">
                        <div class="ket">
                            <h2><?=$tampil['produk_nama']?></h2>
                            <h3>Rp <?= number_format($tampil['produk_harga'],0,',','.') ?></h3>
                            <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php    
                }
                ?>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="footer-container">
            <div class="link1">
                <div class="box-footer">
                    <h2>Customer Care</h2>
                    <div><a href="#"><i class="fa-solid fa-phone"></i>08123456789</a></div>
                    <div><a href="#"><i class="fa-solid fa-envelope"></i>Olshop@gmail.com</a></div>
                    <div><a href="#"><i class="fa-regular fa-clock"></i>09:00 s/d 17:00</a></div>
                </div>
                <div class="box-footer">
                    <h2>Bantuan</h2>
                    <div><a href="#">Pusat Edukasi</a></div>
                    <div><a href="#">Cara Belanja</a></div>
                    <div><a href="#">Pembayaran</a></div>
                </div>
            </div>
            <div class="link1">
                <div class="box-footer">
                    <h2>Info</h2>
                    <div><a href="#">Pusat Edukasi</a></div>
                    <div><a href="#">Cara Belanja</a></div>
                    <div><a href="#">Pembayaran</a></div>
                </div>
                <div class="box-footer">
                    <h2>Ikuti Kami</h2>
                    <div class="ikut-box">
                        <div><a href="#"><i class="fa-brands fa-facebook-f"></i></a></div>
                        <div><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                        <div><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                        <div><a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div><h1>@2022 Sandio PetCare</h1></div>
    </footer>
</body>
</html>