
<?php
   session_start();
   if(isset($_SESSION['email'])) {
   header('location:halo/index.php'); }
   require_once("config/koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="assets/css/auth.css">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <div class="card">
    <div id="card-content">
      <form action="config/auth_login.php" method="post" class="form">
      <h2>LOGIN</h2>
      <div class="underline-title"></div><br>
        
        <input id="user-email" placeholder="Email" class="form-content" type="email" name="email" required="required" />
        
        <input id="user-password" placeholder="Password" class="form-content" type="password" name="password" required="required" />
       
        <input id="submit-btn" type="submit" name="submit" value="login" />
        
        <div style="text-align:center;" > <br>
            <small>Belum punya akun? <a style="text-decoration: underline;" href="daftar.html">Daftar</a></small><br>
            <small><a style="text-decoration: underline;" href="">Lupa password?</a></small>
        </div>

      </form>
    </div>
  </div>
</body>

</html>