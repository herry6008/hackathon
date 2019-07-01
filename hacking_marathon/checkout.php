<?php 
session_start();
foreach ($_SESSION['keranjang'] as $product_id => $jumlah) {
	include '../config.php';
	$ambil = $koneksi->query("SELECT * FROM products WHERE id='$product_id'");
	$obj = $ambil->fetch_object();
	$cost = $obj->price * $jumlah;
	$email = $_SESSION['email'];
	
	$insert = $koneksi->query("INSERT INTO orders(nama_email,product_img, product_name, product_jml, product_price, product_total) VALUES
		('$email','$obj->product_img','$obj->product_name','$jumlah','$obj->price','$cost')");
	if ($insert) {
		echo "<script>alert('Pembelian Products Akan Segera Kami Konfirmasi');</script>";
		echo "<script>alert('Setelah Kami Konfirmasi, Kami Akan Menghubungi Anda Via Email');</script>";
		unset($_SESSION['keranjang']);
		unset($_SESSION['barang']);
		unset($_SESSION['jumlah']);
		echo "<script>location='index.php';</script>";

	}
}

?>



