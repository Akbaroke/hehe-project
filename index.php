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

<?php include 'layouts/header-static.php'; ?>


</head>
<body>

<?php include 'layouts/nav.php'; ?>

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
                        <img src="./assets/img/landing/produk/<?=$tampil['produk_foto1']?>">
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

<?php include 'layouts/footer.php'; ?>
