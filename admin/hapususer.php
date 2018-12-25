<?php 
include '../config/config.php';
$ambil = $koneksi->query("SELECT * FROM users WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['foto'];
if (file_exists("../foto/$fotouser")) {
	# code...
	unlink("../foto/$fotouser");
}

$koneksi->query("DELETE FROM users WHERE id = '$_GET[id]' ");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=user'; </script>";

 ?>