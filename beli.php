<?php
session_start();
$id_produk = $_GET['id_produk'];


//kalau sudah ada produk di keranjang maka produk jumlahnya di -1
if(isset($_SESSION['keranjang'][$id_produk]))
	{
		$_SESSION['keranjang'][$id_produk]+=1;
	}
else
	{
		$_SESSION['keranjang'][$id_produk] = 1;
	}
//echo "<prev>";
//print_r($_SESSION);
//echo "</prev>";
	echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
	echo "<script>location = 'keranjang.php';</script>";
?>