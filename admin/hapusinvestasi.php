<?php 
include '../config/config.php';
$ambil = $koneksi->query("SELECT * FROM investasi WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['foto'];
if (file_exists("../foto_investasi/$fotouser")) {
	# code...
	unlink("../foto_investasi/$fotouser");
}

$koneksi->query("DELETE FROM investasi WHERE id = '$_GET[id]' ");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=investasi'; </script>";

 ?>