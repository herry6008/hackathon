<?php 

session_start();
unset($_SESSION['keranjang']);
unset($_SESSION['barang']);
unset($_SESSION['jumlah']);
header("location:cart.php")

 ?>