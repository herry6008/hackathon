<?php 
session_start();
$total=0;
$koneksi = new mysqli("localhost","root","","onetech");
foreach ($_SESSION['cart'] as $product_id => $jumlah) {
	$ambil = $koneksi->query("SELECT * FROM products WHERE id='$product_id'");
	while ($obj = $ambil->fetch_object()) {
		
		$cost=$obj->price * $jumlah;
		$total = $total + $cost;
		echo $obj->product_name." ".$obj->price." ".$cost." "."<br>";

	}echo $total;
	
}


 ?>