
<h2>Data User</h2>
<?php 
$koneksi = new mysqli("localhost", "root", "", "jobsfind");
 ?>

<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM users"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama'] ?></td>
			<td><?php echo $pecah['alamat'] ?></td>
			<td><?php echo $pecah['foto'] ?></td>
			<td>
				<a href="" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">tambah data user</a>