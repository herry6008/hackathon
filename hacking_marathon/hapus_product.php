<?php 
session_start();
$product_id = $_GET['id'];

unset($_SESSION['keranjang'][$product_id]);
?>

<script type="text/javascript">alert("Produk Berhasil Di Hapus");</script>
<script type="text/javascript">location="cart.php";</script>