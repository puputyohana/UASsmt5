<?php
		
			include 'config.php';

		$id_plgn = $_POST['id_plgn'];
		$nm_plgn = $_POST['nm_plgn'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		mysqli_query($conn, "INSERT INTO tb_pelanggan (id_plgn,nm_plgn,email,alamat,no_telp,username,pass) values ('$id_plgn','$nm_plgn','$email','$alamat','$no_telp','$username','$pass')");
		
		header("location:index.php?page=pelanggan");
	?>