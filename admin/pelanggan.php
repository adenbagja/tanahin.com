<h2>pelnggan</h2>

<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan'] ?></td>
			<td><?php echo $pecah['email_pelanggan'] ?></td>
			<td><?php echo $pecah['tlp_pelanggan'] ?></td>
			<td>
				<a href="" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">tambah pelanggan</a>