<?php
session_start();
$id_produk = $_GET['id_produk'];

unset($_SESSION["keranjang"][$id_produk]);

echo "<script>alert('Produk Berhaisl Terhapus dari Keranjang!');</script>";
echo "<script>location = 'keranjang.php';</script>";

?>