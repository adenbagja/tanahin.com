<h2>Data Investasi</h2>
<?php 
include '../config/config.php';
?>

<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Persentase</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM investasi"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama'] ?></td>
				<td><?php echo $pecah['persentase'] ?></td>
				<td><?php echo $pecah['alamat'] ?></td>
				<td>
					<img src="../foto_investasi/<?php echo $pecah['foto'];?>" width="100px">
				</td>
				<td>
					<a href="index.php?halaman=hapusinvestasi&id=<?php echo $pecah['id']; ?>" class="btn btn-danger">hapus</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahdatainvestasi" class="btn btn-primary">tambah data investasi</a>
