<?php 
include 'config/config.php';
 ?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Tanahin.com</title>

	<link rel="stylesheet" type="text/css" href="js/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="js/css/my-login.css">

</head>

<body class="my-login-page">

	<section class="h-100">

		<div class="container h-100">

			<div class="row justify-content-md-center h-100">

				<div class="card-wrapper">

					<div class="brand">




					</div>

					<div class="card fat">

						<div class="card-body">

							<h4 class="card-title">Register</h4>

							<form method="POST" class="my-login-validation" novalidate="">

								<div class="form-group">

									<label for="name">Name</label>

									<input id="name" type="text" class="form-control" name="name" required autofocus>

									<div class="invalid-feedback">

										What's your name?

									</div>

								</div>



								<div class="form-group">

									<label for="email">E-Mail Address</label>

									<input id="email" type="email" class="form-control" name="email" required>

									<div class="invalid-feedback">

										Your email is invalid

									</div>

								</div>



								<div class="form-group">

									<label for="password">Password</label>

									<input id="password" type="password" class="form-control" name="password" required data-eye>

									<div class="invalid-feedback">

										Password is required

									</div>

								</div>



								<div class="form-group">

									<div class="custom-checkbox custom-control">

										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">

										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>

										<div class="invalid-feedback">

											You must agree with our Terms and Conditions

										</div>

									</div>

								</div>



								<div class="form-group m-0">

									<button type="submit" class="btn btn-primary btn-block" name="submit">

										Register

									</button>

								</div>

								<div class="mt-4 text-center">

									Already have an account? <a href="login.php">Login</a>

								</div>

							</form>

						</div>

					</div>
					<?php 
 if(isset($_POST['submit']))
 {
 	
 	$koneksi->query("INSERT INTO users
 		(nama, email, password ) 
 		VALUES('$_POST[name]','$_POST[email]' ,'$_POST[password]')");

 	echo "<div class='alert alert-info'>Data Tersimpan</div>";
 	echo "<meta http-equiv='refresh' content='1;url=login.php'>"; 
 }
 ?>

					<div class="footer">

						Copyright &copy; 2017 &mdash; tanahin.com

					</div>

				</div>

			</div>

		</div>

	</section>



	<script src="js/jquery.min.js"></script>

	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="js/my-login.js"></script>

</body>

</html>