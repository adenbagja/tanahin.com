<?php 
include '../config/config.php';
$ambil = $koneksi->query("SELECT * FROM penjualan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['foto'];
if (file_exists("../foto_penjualan/$fotouser")) {
	# code...
	unlink("../foto_penjualan/$fotouser");
}

$koneksi->query("DELETE FROM penjualan WHERE id = '$_GET[id]' ");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=penjualan'; </script>";

 ?>