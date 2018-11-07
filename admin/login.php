
<?php include '../config/config.php'; ?>
<?php  include '../lib/Database.php'; ?>

 <?php
//script connection
 session_start();
// $koneksi = new mysqli("localhost", "root", "", "findsjob");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />
	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h2> Admin : Login</h2>

				<br />
			</div>
		</div>
		<div class="row ">

			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>   Enter Details To Login </strong>  
					</div>
					<div class="panel-body">
						<form role="form" method="POST">
							<br />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" class="form-control" name="user" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" class="form-control"  name="password" />
							</div>
							<div class="form-group">
								<label class="checkbox-inline">
									<input type="checkbox" /> Remember me
								</label>
								<span class="pull-right">
									<a href="#" >Forget password ? </a> 
								</span>
							</div>

							<button class="btn btn-primary" name="login">Login</button>
							<hr />
							Not register ? <a href="registeration.html" >click here </a> 
						</form>
						<?php
						$db = new Database();
						if(isset($_POST['login']))
						{
							$username = $_POST['user'];
							$password = $_POST['password'];
							$query = "SELECT * FROM admin WHERE username ='$username' AND password ='$password'";
							$result = $db->select($query);
							if($result){
								 $row  = $result->fetch_assoc();
								 $count = $result->num_rows;
								//header('Location: index.php');

							 	if($count == 1){
							 		echo 'sukses';
							 		$_SESSION['user']      = $username;
							 		$_SESSION['id'] = $row['id'];
							 		$_SESSION['user_type'] = $row['user_type'];
							 		header('Location: index.php');
							 	}
							 }
							else{
									
								echo 'your username and password is invalid';
							 }
						}
						?>
					</div>

				</div>
			</div>


		</div>
	</div>


	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>

</body>
</html>
