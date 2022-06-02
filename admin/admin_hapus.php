<?php 
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from admin where admin_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['admin_foto'];
unlink("../assets/img/user/$foto");
mysqli_query($koneksi, "delete from admin where admin_id='$id'");
header("location:admin.php");
