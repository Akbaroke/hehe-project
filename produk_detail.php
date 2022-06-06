<?php include "config/koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'layouts/header-static.php'; ?>
	<title>Produk Detail</title>
</head>
<body>

	<?php include 'layouts/nav.php'; ?>

	<?php 
		$id_produk = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori and produk_id='$id_produk'");
		while($d=mysqli_fetch_array($data)){
	?>
	<main class="main">
      <section class="product-wrapper">
        <div class="container-produk">
          <div class="product-images-wrapper">
            <div class="preview-image-wrapper">
              <img class="preview-image" src="assets/img/landing/produk/<?php echo $d['produk_foto1'] ?>">
              <div class="arrows hide-for-desktop">
                <div class="next">
                  <img src="./images/icon-next.svg" alt="Next Icon" />
                </div>
                <div class="prev">
                  <img src="./images/icon-previous.svg" alt="Previous Icon" />
                </div>
              </div>
              <div class="count">
                <p>
                  <span class="current"></span> of
                  <span class="total"></span>
                </p>
              </div>
            </div>

            <div class="thumbs-wrapper hide-for-mobile">
              <div class="thumb-image active">
                <img class="preview-image" src="assets/img/landing/produk/<?php echo $d['produk_foto1'] ?>">
              </div>
              <div class="thumb-image">
                <img class="preview-image" src="assets/img/landing/produk/<?php echo $d['produk_foto2'] ?>">
              </div>
              <div class="thumb-image">
                <img class="preview-image" src="assets/img/landing/produk/<?php echo $d['produk_foto3'] ?>">
              </div>

            </div>
          </div>&emsp;&emsp;&emsp;&emsp;&emsp;
          <div class="product-details-wrapper"> 
            <h2 class="product-title"><?php echo $d['produk_nama']; ?></h2>
            <p class="product-description">
              
            </p>

            <div class="product-price">
              <div class="current-price-wrapper">
                <h2 style="color:#EA8D30;" class="current-price"><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?> <?php if($d['produk_jumlah'] == 0){?> <del class="product-old-price">Kosong</del> <?php } ?></h2>
                <!--span class="discount">50%</span-->
              </div>
              <div class="previous-price-wrapper">
                <span class=""><strong>Status:</strong> 
					<?php 
					if($d['produk_jumlah'] == 0){
						echo "Kosong";
					}else{
						echo "Tersedia";
					} 
					?>
				</span>
              </div>
            </div>

            <form action="#" class="add-to-cart-form">
              <!--div class="product-quantity">
                <button type="button" class="button minus">
                  <img src="./images/icon-minus.svg" alt="Minus Icon" />
                </button>
                <span class="product-quantity-num">0</span>
                <button type="button" class="button plus">
                  <img src="./images/icon-plus.svg" alt="Plus Icon" />
                </button>
              </div-->

              <a href="keranjang/tambah.php?id=<?php echo $d['produk_id']; ?>&redirect=detail"
                type="submit"
                aria-label="Add to cart"
                class="button add-btn"
              >
                <img src="./images/icon-cart.svg" alt="" />&emsp;
                Tambah ke Keranjang
              </a>

              <p class="form-alert"></p>
            </form>
          </div>
        </div>
        <div style="margin:0% auto; width: 80%;" >
    		<h3>Deskripsi</h3>
    		<div class="line" ></div>
			<p class="deskripsi">
              <?php echo $d['produk_keterangan']; ?>
    		</p>
		</div>
      </section>
    </main>
    <!-- LightBox -->
    <div class="lightbox-wrapper">
      <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>

    
<?php 
}
?>


<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section title -->
		<section id="produk-terbaru">
        	<div class="produk-container"><hr>
					<h2 class="title">Rekomendasi Produk Lainnya</h2>
					<div class="line" ></div><br>
			<!-- section title -->
			<div class="produk-list">

			<?php           
			$data = mysqli_query($koneksi,"select * from produk,kategori where kategori_id=produk_kategori order by rand() limit 4");
			while($d = mysqli_fetch_array($data)){
				?>

				<div class="produk-box">
                    <a href="produk_detail.php?id=<?php echo $d['produk_id'] ?>"><div>
                        <img src="assets/img/landing/produk/<?=$d['produk_foto1']?>">
                        <div class="ket">
                            <h2><?=$d['produk_nama']?></h2>
                            <h3>Rp <?= number_format($d['produk_harga'],0,',','.') ?>
                            <?php if($d['produk_jumlah'] == 0){?> <del class="product-old-price">Kosong</del> <?php } ?></h3>
                            <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        </div>
                    </div>
                    </a>
                </div>
				<!-- /Product Single -->

				<?php 
			}
			?>
		</div>
		</div>
	</section>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>

<?php include 'layouts/footer.php'; ?>