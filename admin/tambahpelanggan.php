<h2>tambah data investasi</h2>

<form method="post" >
	<div class="form-group">
		<label>Nama Investasi</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Persentase</label>
		<input type="text" class="form-control" name="persentase">
	</div>
	<div class=form-group>
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="text" class="form-control" name="foto">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
 if(isset($_POST['save']))
 {
 	
 	$koneksi->query("INSERT INTO investasi 
 		(nama, persentase, alamat, foto) 
 		VALUES('$_POST[nama]','$_POST[persentase]','$_POST[alamat]','$_POST[foto]')");

 	echo "<div class='alert alert-info'>Data Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=investasi'>"; 
 }
 ?>
 