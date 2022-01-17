<?php
		
			include 'config.php';

		$id_admin = $_POST['id_admin'];
		$nm_admin = $_POST['nm_admin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

	$e = mysqli_query($conn, "UPDATE tb_admin set nm_admin='$nm_admin', alamat='$alamat', no_hp = '$no_hp', username='$username', pass='$pass' where id_admin='$id_admin'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='index.php?page=admin';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='index.php?page=admin';</script>";
	}
	?>