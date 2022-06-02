<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PETSHOP</title>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../assets/css/auth.css" />
</head> 
<body>
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

<a href="../">Home</a>
			
<?php 
include 'customer_sidebar.php'; 
?>

<div id="main" class="col-md-9">

<h4>DASHBOARD</h4>
	<h5>Halo, Selamat Datang!</h5>

	<table class="table table-bordered">
		<tbody>
			<?php 
			$id = $_SESSION['customer_id'];
			$customer = mysqli_query($koneksi,"select * from customer where customer_id='$id'");
			while($i = mysqli_fetch_array($customer)){
				?>
				<tr>
					<th width="20%">Nama</th>	
					<td><?php echo $i['customer_nama'] ?></td>
				</tr>
				<tr>
					<th width="20%">Email</th>	
					<td><?php echo $i['customer_email'] ?></td>
				</tr>
				<tr>
					<th>HP</th>	
					<td><?php echo $i['customer_hp'] ?></td>
				</tr>
				<tr>
					<th>Alamat</th>	
					<td><?php echo $i['customer_alamat'] ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>



	</div>

</body>
</html>