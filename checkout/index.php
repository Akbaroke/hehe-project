<?php include '../customer/header.php'; ?>

<h2>Two Equal Columns</h2>

<div class="row">
  <div class="column" >
  	<h2>INFORMASI PEMBELI / PENERIMA BARANG</h2>
  	<div class="form" >
  		<form>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="input" name="nama" placeholder="Masukkan nama pemesan .." required="required">
			</div>

			<div class="form-group">
				<label>Nomor HP</label>
				<input type="number" class="input" name="hp" placeholder="Masukkan no.hp aktif .." required="required">
			</div>

			<div class="form-group">
				<label>Alamat Lengkap</label>
				<textarea name="alamat" class="form-control" style="resize: none;" rows="6" placeholder="Masukkan alamat lengkap .."></textarea>
			</div>

			<div class="form-group">
				<label>Provinsi Tujuan</label>
				<select name='provinsi' id='provinsi' class="input">
					<option>Pilih Provinsi Tujuan</option>
					<?php 
					for ($i=0; $i < count($data_provinsi['rajaongkir']['results']); $i++) {
						echo "<option value='".$data_provinsi['rajaongkir']['results'][$i]['province_id']."'>".$data_provinsi['rajaongkir']['results'][$i]['province']."</option>";
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Kabupaten</label>
				<select id="kabupaten" name="kabupaten" class="input"></select>
			</div>
			<input name="kurir" id="kurir" value="" required="required" type="hidden">
			<input name="ongkir2" id="ongkir2" value="" required="required" type="hidden">
			<input name="service" id="service" value="" required="required" type="hidden">
			<input name="provinsi2" id="provinsi2" value="" required="required" type="hidden"> 
			<input name="kabupaten2" id="kabupaten2" value="" required="required" type="hidden"> 

			<div id="ongkir"></div>

			<div class="pull-left">
				<a class="main-btn" href="keranjang.php">Kembali Ke Keranjang</a>
			</div>

			<div class="pull-right">
				<input type="submit" class="primary-btn" value="Buat Pesanan">
			</div>

		
  	</div>

  </div>
  <div class="column" >
    <?php 
	if(isset($_SESSION['keranjang'])){

		$jumlah_isi_keranjang = count($_SESSION['keranjang']);

		if($jumlah_isi_keranjang != 0){

	?>
  	<table style="width: 100%;" id="table">
			<tr>
				<th>Produk</th>
				<th >Harga</th>
				<th >Jumlah</th>
				<th >Total Harga</th>
			</tr>

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

				<tr>
					<td>
						<a href="produk_detail.php?id=<?php echo $i['produk_id'] ?>"><?php echo $i['produk_nama'] ?></a>
					</td>
					<td class="text-center">
						<?php echo "Rp. ".number_format($i['produk_harga']) . " ,-"; ?>
					</td>
					<td class="qty text-center">
						<?php echo $_SESSION['keranjang'][$a]['jumlah']; ?>
					</td>
					<td class="text-center"><strong class="primary-color total_harga" id="total_<?php echo $i['produk_id'] ?>"><?php echo "Rp. ".number_format($total) . " ,-"; ?></strong></td>
				</tr>

				<?php
				$total = 0;

			}

			?>

			<tr>
				<th class="empty" colspan="2"></th>
				<th>TOTAL BERAT</th>
				<th class="text-center"><?php echo $total_berat; ?> Gram</th>
			</tr>
			<tr>
				<th class="empty" colspan="2"></th>
				<th>ONGKIR</th>
				<th class="text-center"><span id="tampil_ongkir"><?php echo "Rp. 0 ,-"; ?></span></th>
			</tr>
			<tr>
				<th class="empty" colspan="2"></th>
				<th>TOTAL BAYAR</th>
				<th class="text-center"><span id="tampil_total"><?php echo "Rp. ".number_format($jumlah_total) . " ,-"; ?></span></th>
			</tr>

	</table>

	<input name="berat" id="berat2" value="<?php echo $total_berat ?>" type="hidden">

			<input type="hidden" name="total_bayar" id="total_bayar" value="<?php echo $jumlah_total; ?>">

			<?php
		}else{

			echo "<br><br><br><h3><center>Keranjang Masih Kosong. Yuk <a href='index.php'>belanja</a> !</center></h3><br><br><br>";
		}


	}else{
		echo "<br><br><br><h3><center>Keranjang Masih Kosong. Yuk <a href='index.php'>belanja</a> !</center></h3><br><br><br>";
	}
	?>

	</form>

  </div>
</div>

<?php include '../customer/footer.php'; ?>