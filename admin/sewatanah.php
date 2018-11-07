<h2>ini bagian pembelian</h2>
<?php 
$koneksi = new mysqli("localhost", "root", "", "jobsfind");
 ?>
<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM sewa_tanah"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama'] ?></td>
			<td><?php echo $pecah['alamat'] ?></td>
			<td><?php echo $pecah['luas'] ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php  echo $pecah['id_pembelian'];?>" class="btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
