

<?php 
$koneksi = new mysqli("localhost", "root", "", "tan");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Sewa Tanah</title>
</head>

<body>



<div class="container-fluid bg-light-gray">

<div class="container pt-5">
   
	<div class="row">
	  <h3>Tanah yang sedang di sewakan</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>



<div class="container mt-5">
	<div class="row">
		<?php $ambil = $koneksi->query("SELECT * FROM sewa"); ?>
		<?php while ($perproduk = $ambil->fetch_assoc()){ ?>
		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="foto_sewa/<?php echo $perproduk['foto']; ?>" class="card-img-top" width="200" height="40">
				<div class="card-body">
					<h5><?php echo $perproduk['nama'] ?></h5>
					<h6> <?php echo $perproduk['luas'] ?>%</h6>
					<h6> <?php echo $perproduk['alamat'] ?></h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Sewa Tanah ini</button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- <div class="container"> -->
				<!-- <h1>Produk Terbaru</h1>

				<div class="row">

					<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
					<?php while ($perproduk = $ambil->fetch_assoc()){ ?>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="db_foto/<?php echo $perproduk['foto_produk']; ?>" width="200" height="40"   >
								<div class="caption">
									<h3><?php echo $perproduk['nama_produk'] ?></h3>
									<h5>Rp. <?php echo $perproduk['harga_produk'] ?></h5>
									<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?> " class="btn btn-primary">Beli</a>
								</div>
							</div>	
						</div>
					<?php } ?>
				</div>
			</div>
		</section> -->