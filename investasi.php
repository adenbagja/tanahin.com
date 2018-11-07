<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php';?>
<?php include 'helpers/format_helpers.php'; ?>
<?php
   $db = new Database();
   $query = "SELECT * FROM categories";
   $result = $db->select($query);
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



<div class="container-fluid bg-light-gray">

<div class="container pt-5">
   
	<div class="row">
	  <h3>Investasi Yang Sedang Berjalan</h3>
	</div>
		<div class="row">
		<div class="underline"></div>
	</div>
</div>



<div class="container mt-5">
	<div class="row">
		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/baju.jpeg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Grey Top</h5>
					<h6>Rp. 235.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/baju2.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Sweater Boy</h5>
					<h6>Rp. 70.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/baju4.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Sweater Deenay</h5>
					<h6>Rp. 200.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
		
		
		
		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/baju3.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Sweater Top</h5>
					<h6>Rp. 150.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/kerudung.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>kerudung Deenay</h5>
					<h6>Rp. 235.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/kerudung2.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Voal Printed</h5>
					<h6>Rp. 150.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/karudung1.jpg" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Kerudung Deenay</h5>
					<h6>Rp. 200.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card view zoom">
				<div class="mask flex-center"></div>
				<img src="img/kerudung4.JPG" alt="card-1" class="card-img-top">
				<div class="card-body">
					<h5>Kerudung Deenay</h5>
					<h6>Rp. 235.000</h6>
					<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include 'includes/footer.php'; ?>