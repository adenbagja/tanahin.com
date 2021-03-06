<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Tanahin.com</title>
		<meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrapasli.css">
		<link href="css/carousel.css" rel="stylesheet">
	</head>
	<body>
<!-- NAVBAR -->
      <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Tanahin.com</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="investasi.php">Investasi</a></li>
                <li><a href="sewa.php">Sewa Tanah</a></li>
                <li><a href="jualbeli.php">Jual-beli Tanah</a></li>
              </ul>
              <ul class="nav navbar-nav pull-right">
              	<?php if(isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                 <li><a href="signup.php">Signup</a></li>
                 <li><a href="login.php">Login</a></li>
               <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  <!--Corsule -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/a2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Investasi produk lokal</h1>
              <!-- <p style="color:  #FF0000">Segera berivestasi untuk kehidupan yang lebih baik</p> -->
              <div>
                <a class="btn btn-lg btn-primary" href="login.php" role="button">Investasi</a>
                <a class="btn btn-lg btn-danger" href="login.php" role="button">Sewa tanah</a>
                <a class="btn btn-lg btn-primary" href="login.php" role="button">jual-beli tanah</a>
              </div>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/a4.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Investasi produk lokal</h1>
              <a class="btn btn-lg btn-primary" href="login.php" role="button">Investasi</a>
              <a class="btn btn-lg btn-danger" href="login.php" role="button">Sewa tanah</a>
              <a class="btn btn-lg btn-primary" href="login.php" role="button">jual-beli tanah</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/a1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Investasi produk lokal</h1>
              <a class="btn btn-lg btn-primary" href="login.php" role="button">Investasi</a>
              <a class="btn btn-lg btn-danger" href="login.php" role="button">Sewa tanah</a>
              <a class="btn btn-lg btn-primary" href="login.php" role="button">jual-beli tanah</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
      <!-- START THE FEATURETTES -->

    
      <!-- /END THE FEATURETTES -->
     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="jumbotron">
      <h1 class="text-center">Team</h1>
    </div>
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/a.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>Aden Bagja</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/32.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Tedi Tian </h2>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img/32.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Rifqi</h2>
        </div>
      </div><!-- /.row -->

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; tanahin.com &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')         </script> 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script>

	</body>
</html>