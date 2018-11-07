<?php 
$koneksi = new mysqli("localhost", "root", "", "tan");
$ambil = $koneksi->query("SELECT * FROM investasi WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['foto'];
if (file_exists("../foto/$fotouser")) {
	# code...
	unlink("../foto/$fotouser");
}

$koneksi->query("DELETE FROM investasi WHERE id = '$_GET[id]' ");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=investasi'; </script>";

 ?>