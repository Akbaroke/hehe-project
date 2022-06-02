<?php
include "config/koneksi.php";

session_start();

$file = basename($_SERVER["PHP_SELF"]);

if (!isset($_SESSION["customer_status"])) {
    // halaman yg dilindungi jika customer belum login
    $lindungi = ["customer/customer.php", "customer/customer_logout.php"];

    // periksa halaman, jika belum login ke halaman di atas, maka alihkan halaman
    if (in_array($file, $lindungi)) {
        header("location:index.php");
    }

    if ($file == "checkout.php") {
        header("location:login.php?alert=login-dulu");
    }
} else {
    // halaman yg tidak boleh diakses jika customer sudah login
    $lindungi = ["login.php", "daftar.php"];

    // periksa halaman, jika sudah dan mengakses halaman di atas, maka alihkan halaman
    if (in_array($file, $lindungi)) {
        header("location:customer/customer.php");
    }
}

if ($file == "checkout.php") {
    if (!isset($_SESSION["keranjang"]) || count($_SESSION["keranjang"]) == 0) {
        header("location:keranjang.php?alert=keranjang_kosong");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="assets/css/auth.css">
  <title>Daftar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include 'layouts/header-static.php'; ?>
</head>
<body>

<?php include 'layouts/nav.php'; ?>

<?php 
if(isset($_GET['alert'])){
    if($_GET['alert'] == "terdaftar"){
        echo "<div class='alert alert-success text-center'>Selamat akun anda telah disimpan, silahkan login.</div>";
    }elseif($_GET['alert'] == "duplikat"){
        echo "<div class='alert alert-danger text-center'>Maaf email ini sudah digunakan, silahkan gunakan email yang lain.</div>";
    }
}
?>

  <div class="card">
    <div id="card-content">
      
      <form action="config/auth.php" method="post" class="form">

        <h2>DAFTAR</h2>
        <div class="underline-title"></div><br>

        <input id="user-email" placeholder="Nama" class="form-content" type="text" name="nama" required />

        <input id="user-email" placeholder="Email" class="form-content" type="email" name="email" autocomplete="on" required />


        <input id="user-email" type="number" class="form-content" required="required" name="hp" placeholder="Masukkan nomor HP/Whatsapp ..">

        <input id="user-email" type="text" class="input" required="required" name="alamat" placeholder="Masukkan alamat lengkap ..">

        <input id="user-password" placeholder="Password" class="form-content" type="password" name="password" required />

        <input id="submit-btn" type="submit" name="submit" value="DAFTAR" />
        <small style="text-align:center;" > <br>
            Dengan ini menyetujui <a style="text-decoration:underline;" href="">Syarat dan Ketentuan</a> dan
            <a style="text-decoration:underline;" href="">Kebijakan Privasi </a>
        </small>
        <small style="text-align:center;">  
          Sudah punya akun?<a style="text-decoration:underline;" href="login"> Masuk</a> 
        </small>
      </form>
    </div>
  </div>
<?php include 'layouts/footer.php'; ?>