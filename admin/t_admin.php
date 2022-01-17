<?php
		
			include 'config.php';

		$id_admin = $_POST['id_admin'];
		$nm_admin = $_POST['nm_admin'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		mysqli_query($conn, "INSERT INTO tb_admin (id_admin,nm_admin,alamat,no_hp,username,pass) values ('$id_admin','$nm_admin','$alamat','$no_hp','$username','$pass')");
		
		header("location:index.php?page=admin");
	?>