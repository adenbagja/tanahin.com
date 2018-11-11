<h2>ini bagian Sewa Tanah</h2>
<?php 
$koneksi = new mysqli("localhost", "root", "", "tan");
?>
<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama </th>
			<th>Alamat</th>
			<th>luas</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM sewa"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama'] ?></td>
				<td><?php echo $pecah['alamat'] ?></td>
				<td><?php echo $pecah['luas'] ?></td>
				<td>
					<img src="../foto_sewa/<?php echo $pecah['foto'];?>" width="100px">
				</td>
				<td>
					<a href="index.php?halaman=hapussewa&id=<?php echo $pecah['id_sewa']; ?>" class="btn btn-danger">hapus</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahdatasewa" class="btn btn-primary">tambah data sewa</a>