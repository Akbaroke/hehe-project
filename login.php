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
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php include 'layouts/header-static.php'; ?>
</head>
<body>

<?php include 'layouts/nav.php'; ?>


  <div class="card">
    <?php 
    if(isset($_GET['alert'])){
      if($_GET['alert'] == "terdaftar"){
        echo "<div style='color:purple;' >*Selamat akun anda telah disimpan, silahkan login</div>";
      }elseif($_GET['alert'] == "gagal"){
        echo "<div style='color:purple;' >*Email dan Password tidak sesuai, coba lagi</div>";
      }elseif($_GET['alert'] == "login-dulu"){
        echo "<div style='color:purple;' >*Silahkan login terlebih dulu untuk membuat pesanan</div>";
      }
    }
    ?>
    <div id="card-content">
      <form action="config/auth_login.php" method="post" class="form">
      <h2>LOGIN</h2>
        
        <input id="user-email" placeholder="Email" class="form-content" type="email" name="email" required="required" />
        
        <input id="user-password" placeholder="Password" class="form-content" type="password" name="password" required="required" />
       
        <input id="submit-btn" type="submit" name="submit" value="login" />
        
        <div style="text-align:center;" > <br>
            <small>Belum punya akun? <a style="text-decoration: underline;" href="daftar.php">Daftar</a></small><br>
            <small><a style="text-decoration: underline;" href="">Lupa password?</a></small>
        </div>

      </form>
    </div>
  </div>
<?php include 'layouts/footer.php'; ?>