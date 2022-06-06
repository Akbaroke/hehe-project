<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// daftar
$nama  = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$password = md5($_POST['password']);

$cek_email = mysqli_query($koneksi,"select * from customer where customer_email='$email'");
if(mysqli_num_rows($cek_email) > 0){
	header("location:../daftar.php?alert=duplikat");
}else{
	mysqli_query($koneksi, "insert into customer values (NULL,'$nama','$email','$hp','$password','','','','','','','','','')");
	header("location:../login.php?alert=terdaftar");
}
?>