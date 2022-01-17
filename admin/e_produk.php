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

				$query = mysqli_query($conn, "UPDATE tb_produk set nm_produk='$nm_produk', jml_produk='$jml_produk', keterangan = '$keterangan', preorder='$preorder', harga = '$harga', gambar = '$nama_gambar_baru' where id_produk='$id_produk'");

				$result = mysqli_query($conn, $query);

				header("location:index.php?page=produk");
				
			} else {
					echo "<script> alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='index.php?page=tambahproduk';</script>";
			}
			
		}

?>



				