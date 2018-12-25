<?php 
include '../config/config.php';
$ambil = $koneksi->query("SELECT * FROM sewa WHERE id_sewa='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['foto'];
if (file_exists("../foto_sewa/$fotouser")) {
	# code...
	unlink("../foto_sewa/$fotouser");
}

$koneksi->query("DELETE FROM sewa WHERE id_sewa = '$_GET[id]' ");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=sewatanah'; </script>";

 ?>