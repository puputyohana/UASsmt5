<?php 
	include 'config.php';

	$id_produk = $_GET['id_produk'];
	$h = mysqli_query($conn,"delete from tb_produk where id_produk='$id_produk'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='index.php?page=produk';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='index.php?page=produk';</script>";
	}
	 
	 
?>