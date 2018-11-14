<h2>Data Investasi</h2>
<?php 
include '../config/config.php';
?>

<table class=table table-bordered>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pemilik</th>
			<th>Harga</th>
			<th>Luas</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM penjualan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_pemilik'] ?></td>
				<td><?php echo $pecah['harga'] ?></td>
				<td><?php echo $pecah['luas'] ?>m2</td>
				<td><?php echo $pecah['alamat'] ?></td>
				<td>
					<img src="../foto_penjualan/<?php echo $pecah['foto'];?>" width="100px">
				</td>
				<td>
					<a href="index.php?halaman=hapuspenjualan&id=<?php echo $pecah['id']; ?>" class="btn btn-danger">hapus</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahpenjualan" class="btn btn-primary">tambah data investasi</a>
