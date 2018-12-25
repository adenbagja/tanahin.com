<h2>tambah data Sewa</h2>
<?php 
include '../config/config.php';
 ?>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama </label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class=form-group>
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class=form-group>
		<label>Luas</label>
		<input type="text" class="form-control" name="luas">
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
 	move_uploaded_file($lokasi, "../foto_sewa/".$nama);
 	$koneksi->query("INSERT INTO sewa 
 		(nama, alamat, luas, foto) 
 		VALUES('$_POST[nama]','$_POST[alamat]' ,'$_POST[luas]','$nama')");

 	echo "<div class='alert alert-info'>Data Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=sewatanah'>"; 
 }
 ?>