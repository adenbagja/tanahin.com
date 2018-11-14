
<h2>Data User</h2>
<?php 
include '../config/config.php';
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
			<td>
					<img src="../foto/<?php echo $pecah['foto'];?>" width="100px">
			</td>
			<td>
				<a href="index.php?halaman=hapususer&id=<?php echo $pecah['id']; ?>" class="btn-danger btn">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahuser" class="btn btn-primary">tambah data user</a>

