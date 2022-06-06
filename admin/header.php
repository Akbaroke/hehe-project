<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard Admin</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.css">
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/admin-custom.css">
  
  <?php 
  include '../config/koneksi.php';
  session_start();
  if($_SESSION['status'] != "login"){
    header("location:../admin/login.php?alert=belum_login");
  }
  ?>

</head>
<body class="hold-transition skin-dark sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/img/landing/LOGO.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sandio PetCare</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <div class="user-panel mt-3 mb-3 d-flex">
          <div class="image">
            <?php 
            $id = $_SESSION['id'];
            $profil = mysqli_query($koneksi,"select * from admin where admin_id='$id'");
            $profil = mysqli_fetch_assoc($profil);
            if($profil['admin_foto'] == ""){ 
              ?>
              <img src="../gambar/sistem/user.png" class="img-circle elevation-2" alt="User Image">
            <?php }else{ ?>
              <img src="../gambar/user/<?php echo $profil['admin_foto'] ?>" class="img-circle" style="max-height:45px">
            <?php } ?>
          </div>
          <div class="info">
            <p style="color: white" ><?php echo $_SESSION['nama']; ?></p>
          </div>
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="../admin/" class="nav-link">
              <i class="nav-icon far fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Produk
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="customer" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="transaksi.php" class="nav-link">
              <i class="nav-icon far fa-list"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

          <li class="nav-header">Lainnya</li>
          <li class="nav-item">
            <a href="gantipassword" class="nav-link">
              <i class="nav-icon far fa-lock"></i>
              <p>
                Ubah password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon far fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


