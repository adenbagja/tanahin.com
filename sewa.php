

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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
