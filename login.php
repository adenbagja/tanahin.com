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

              <h4 class="card-title">Login</h4>

              <form method="POST" class="my-login-validation" novalidate="">

                <div class="form-group">

                  <label for="email">E-Mail Address</label>

                  <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                  <div class="invalid-feedback">

                    Email is invalid

                  </div>

                </div>



                <div class="form-group">

                  <label for="password">Password

                    <a href="forgot.html" class="float-right">

                      Forgot Password?

                    </a>

                  </label>

                  <input id="password" type="password" class="form-control" name="password" required data-eye>

                    <div class="invalid-feedback">

                      Password is required

                    </div>

                </div>



                <div class="form-group">

                  <div class="custom-checkbox custom-control">

                    <input type="checkbox" name="remember" id="remember" class="custom-control-input">

                    <label for="remember" class="custom-control-label">Remeber Me</label>

                  </div>

                </div>



                <div class="form-group m-0">

                  <button type="submit" class="btn btn-primary btn-block" name="login">

                    Login

                  </button>

                </div>

                <div class="mt-4 text-center">

                  Don't have an account? <a href="signup.php">Create One</a>

                </div>

              </form>

            </div>

          </div>
          <?php
            if(isset($_POST['login'])){
              $ambil=$koneksi->query("SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]' ");

              $yangcocok = $ambil->num_rows;
              if($yangcocok ==1){
                $_SESSION['users'] = $ambil->fetch_assoc();
                echo '<div class="alert alert-info">Login Sukses</div> ';
                echo '<meta http-equiv="refresh" content="1;url=investasi.php">';
              }
              else{
                echo '<div class="alert alert-danger">Login Gagal</div>';
                echo '<meta http-equiv="refresh" content="1;url=login.php"> ';
              }
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