<?php include '../customer/header.php'; ?>

<div class="container" >	

<!-- <pre>
	<?php 
	print_r($_SESSION); 
	?>
</pre> -->


<h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Harga</label>
    <label class="product-quantity">Jumlah</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>


<form method="post" action="update.php" >

	<?php 
	if(isset($_GET['alert'])){
		if($_GET['alert'] == "keranjang_kosong"){
			echo "<div class='alert alert-danger text-center'>Tidak bisa checkout, karena keranjang belanja masih kosong. <br/> Silahkan belanja terlebih dulu.</div>";
		}
	}
	?>

	<?php 
	if(isset($_SESSION['keranjang'])){
	$jumlah_isi_keranjang = count($_SESSION['keranjang']);
	if($jumlah_isi_keranjang != 0){
	?>

	<?php
// cek apakah produk sudah ada dalam keranjang
	$jumlah_total = 0;
	$total = 0;
	for($a = 0; $a < $jumlah_isi_keranjang; $a++){
		$id_produk = $_SESSION['keranjang'][$a]['produk'];
		$jml = $_SESSION['keranjang'][$a]['jumlah'];

		$isi = mysqli_query($koneksi,"select * from produk where produk_id='$id_produk'");
		$i = mysqli_fetch_assoc($isi);

		$total += $i['produk_harga']*$jml;
		$jumlah_total += $total;
	?>

  <div class="product">
    <div class="product-image">
    <?php if($i['produk_foto1'] == ""){ ?>
		<img src="../assets/img/landing/produk.png">
	<?php }else{ ?>
		<img src="../assets/img/landing/produk/<?php echo $i['produk_foto1'] ?>">
	<?php } ?>
    </div>
    <div class="product-details">
      <div class="product-title">
      	<h3><?php echo $i['produk_nama'] ?></h3></div>
      	<p style="color:grey;" class="product-description"><?php echo substr($i['produk_keterangan'], 0,200), "(selengkapnya lihat produk)"; ?></p>
    </div>
    <div class="product-price"><?= number_format($i['produk_harga'],0,',','.') ?>
    	
    </div>

    <div class="product-quantity">
    <input class="input jumlah" name="jumlah[]" id="jumlah_<?php echo $i['produk_id'] ?>" nomor="<?php echo $i['produk_id'] ?>" type="number" value="<?php echo $_SESSION['keranjang'][$a]['jumlah']; ?>" min="1">
    <input class="harga" id="harga_<?php echo $i['produk_id'] ?>" type="hidden" value="<?php echo $i['produk_harga']; ?>">
	<input name="produk[]" value="<?php echo $i['produk_id'] ?>" type="hidden">
    </div>
    <div class="product-removal">

        <a class="remove-product" href="hapus.php?id=<?php echo $i['produk_id']; ?>&redirect=keranjang">Hapus</a>

    </div>
    <div class="product-line-price"><strong class="primary-color total_harga" id="total_<?php echo $i['produk_id'] ?>"><?= number_format($i['produk_harga'],0,',','.') ?></strong></td>
		</div>
  </div>
<?php
$total = 0;

}
?>
  <div class="totals">
    
    <div class="totals-item totals-item-total">
      <label>Total</label>
      <div class="totals-value" id="cart-total"><?php echo number_format($jumlah_total); ?></div>
      <input type="submit" class="btn-update" value="Update Total">
    </div>
  </div>

<a href="../checkout" class="checkout">Checkout</a>



<?php
	}else{

		echo "<br><br><br><h3><center>Keranjang Masih Kosong. Yuk <a href='../'>belanja</a> !</center></h3><br><br><br>";
	}


	}else{
		echo "<br><br><br><h3><center>Keranjang Masih Kosong. Yuk <a href='../'>belanja</a> !</center></h3><br><br><br>";
	}
?>
</form>
</div>
<?php include '../customer/footer.php'; ?>