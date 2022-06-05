<?php
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandio PetCare</title>

<?php include 'layouts/header-static.php'; ?>


</head>
<body>

<?php include 'layouts/nav.php'; ?>
<div class="container" >  
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
            <h1>Produk Tersedia</h1>
            <div class="produk-list">
                <!php -- GW UBAH BAR AKWOAKWO --
                $ambildata = mysqli_query($koneksi,"SELECT * FROM produk");
                // search
                if (isset($_GET["search"])){
                    $keyword = $_GET["keyword"];
                    $ambildata = mysqli_query($koneksi,"SELECT * FROM produk WHERE
                                    produk_nama LIKE '%$keyword%' OR
                                    produk_kategori LIKE '%$keyword%'");
                }
                while ($tampil = mysqli_fetch_array($ambildata)){
                ?-->

                <?php
                $halaman = 12;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $result = mysqli_query($koneksi, "SELECT * FROM produk");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);  
                if(isset($_GET['urutan']) && $_GET['urutan'] == "harga"){
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori and produk_nama like '%$cari%' order by produk_harga asc LIMIT $mulai, $halaman");
                }else{
                    $data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori order by produk_harga asc LIMIT $mulai, $halaman");
                }
                }else{

                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori and produk_nama like '%$cari%' order by produk_id desc LIMIT $mulai, $halaman");
                }else{
                    $data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori order by produk_id desc LIMIT $mulai, $halaman");
                }

                }          
                $no =$mulai+1;

                while($d = mysqli_fetch_array($data)){
                ?>


                
                <div class="produk-box">
                    <a href="produk_detail.php?id=<?php echo $d['produk_id'] ?>"><div>
                        <img src="assets/img/landing/produk/<?php echo $d['produk_foto1'] ?>">
                        <div class="ket">
                            <h2><?php echo $d['produk_nama']; ?></h2>
                            <h3><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?> <?php if($d['produk_jumlah'] == 0){?> <del class="product-old-price">Kosong</del> <?php } ?></h3>
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
