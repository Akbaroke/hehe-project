<?php 

include '../config/koneksi.php';

session_start();

unset($_SESSION['customer_id']);
unset($_SESSION['customer_status']);

header("location:../login.php");
?>