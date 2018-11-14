<h2>tambah data Penjualan</h2>
<?php 
include '../config/config.php';
 ?>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Pemilik</label>
		<input type="text" class="form-control" name="nama_pemilik">
	</div>
	<div class=form-group>
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class=form-group>
		<label>Luas</label>
		<input type="text" class="form-control" name="luas">
	</div>

	<div class=form-group>
		<label>Harga</label>
		<input type="text" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
 if(isset($_POST['save']))
 {
 	$nama = $_FILES['foto']['name'];
 	$lokasi = $_FILES['foto']['tmp_name'];
 	move_uploaded_file($lokasi, "../foto_penjualan/".$nama);
 	$koneksi->query("INSERT INTO penjualan 
 		(nama_pemilik, alamat, luas, harga, foto) 
 		VALUES('$_POST[nama_pemilik]','$_POST[alamat]' ,'$_POST[luas]', '$_POST[harga]', '$nama')");

 	echo "<div class='alert alert-info'>Data Tersimpan</div>";
 	cho "<meta http-equiv='refresh' content='1;url=index.php?halaman=penjualan'>"; 
 }
 ?>