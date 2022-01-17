<?php 
	include 'config.php';

	$id_admin = $_GET['id_admin'];
	$h = mysqli_query($conn,"delete from tb_admin where id_admin='$id_admin'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='index.php?page=admin';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='index.php?page=admin';</script>";
	}
	 
	 
?>