<?php
	include 'config.php';

		$id_produk = $_POST['id_produk'];
		$nm_produk = $_POST['nm_produk'];
		$jml_produk = $_POST['jml_produk'];
		$keterangan = $_POST['keterangan'];
		$preorder = $_POST['preorder'];
		$harga = $_POST['harga'];
		$gambar = $_FILES['gambar']['name'];

	if($gambar != ""){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $gambar);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];	
			$nama_gambar_baru = $gambar;
  
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){

				move_uploaded_file($file_tmp, 'assets/'.$nama_gambar_baru);

				$query = mysqli_query($conn, "INSERT INTO tb_produk (id_produk,nm_produk,jml_produk,keterangan,preorder,harga, gambar) values ('$id_produk','$nm_produk','$jml_produk','$keterangan','$preorder','$harga','$nama_gambar_baru')");

				$result = mysqli_query($conn, $query);

				header("location:index.php?page=produk");
				
			} else {
					echo "<script> alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='index.php?page=tambahproduk';</script>";
			}
			
		}

?>



				