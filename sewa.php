

<?php 
include 'config/config.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Investasi</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-white bg-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="investasi.php">Investasi <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sewa.php">Sewa Tanah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jualbeli.php">Jual Beli</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="container-fluid bg-light-gray">

<div class="container pt-5">
   
	<div class="row">
	  <h3>Tanah yang disewakan</h3>
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
				<img src="foto_sewa/<?php echo $perproduk['foto']; ?>" class="card-img-top" >
				<div class="card-body">
					<h5><?php echo $perproduk['nama'] ?></h5>
					<h6> <?php echo $perproduk['luas'] ?>m2</h6>
					<small> <?php echo $perproduk['alamat'] ?></small>
					<button class="btn btn-danger" style="width: 150px"><i class="fa fa-cart-plus" aria-hidden="true"></i> Sewa Tanah</button><button class="btn btn-danger" href="lokasi.html" ><i class="fa fa-home"></i></button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
