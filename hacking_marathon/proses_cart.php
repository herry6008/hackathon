<?php 
session_start();
$product_id = $_GET['id'];

if (isset($_SESSION['keranjang'][$product_id])) {
	$_SESSION['keranjang'][$product_id]+=1;
}
else{
	$_SESSION['keranjang'][$product_id]=1;
}
//echo "<pre>";
//print_r($_SESSION['keranjang']);
//echo "</prev>";
echo "<script>alert('data sudah masuk ke keranjang')</script>";
echo "<script>location='index.php'</script>";
 ?>