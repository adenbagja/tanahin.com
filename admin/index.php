<?php 
session_start();
    //koneksi ke database
//include '../config/config.php';
$koneksi = new mysqli("localhost", "root", "", "tan");
   //redirect bila belum login
if (!isset($_SESSION['admin'])) {
        # code...
   echo "<script>location:'login.php';<script>";
   header('location:login.php');
   exit();

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin </title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">admin</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">  
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" width="100" />
                    </li>


                    <li><a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a  href="index.php?halaman=user"><i class="fa fa-dashboard fa-3x"></i> Users</a></li>
                    <li><a  href="index.php?halaman=investasi"><i class="fa fa-dashboard fa-3x"></i> Investasi</a></li>
                    <li><a  href="index.php?halaman=sewatanah"><i class="fa fa-dashboard fa-3x"  ></i> Sewa tanah</a></li>
                    <li><a  href="index.php?halaman=pelanggan"><i class="fa fa-dashboard fa-3x"></i> Pembelian</a></li>
                     <li><a  href="index.php?halaman=penjualan"><i class="fa fa-dashboard fa-3x"></i> Penjualan</a></li>
                    <li><a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> Logout</a></li>

                </ul>

            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman'])) 
                {
                    if ($_GET['halaman']=="produk") 
                    {
                        include 'produk.php';
                    }

                    elseif ($_GET['halaman']=="sewatanah") 
                    {
                        include 'sewatanah.php';
                    }

                    elseif ($_GET['halaman']=="hapussewa") 
                    {
                        include 'hapussewa.php';
                    }

                    elseif ($_GET['halaman']=="tambahdatasewa") 
                    {
                        include 'tambahdatasewa.php';
                    }

                    elseif ($_GET['halaman']=="investasi") 
                    {
                        include 'investasi.php';
                    }

                    elseif ($_GET['halaman']=="hapusinvestasi") 
                    {
                        include 'hapusinvestasi.php';
                    }

                    elseif ($_GET['halaman']=="tambahdatainvestasi") 
                    {
                        include 'tambahdatainvestasi.php';
                    }

                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }

                    elseif ($_GET['halaman']=="detail") {
                        include 'detail.php';
                    }

                    elseif ($_GET['halaman']=="tambahproduk") {
                        include 'tambahproduk.php';
                    }
                    elseif ($_GET['halaman']=="tambahpelanggan") {
                        include 'tambahpelanggan.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk") {
                        include 'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk") {
                        include 'ubahproduk.php';
                    }
                    elseif ($_GET['halaman']=="logout") {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="user") {
                        include 'user.php';
                    }

                    elseif ($_GET['halaman']=="tambahuser") {
                        include 'tambahuser.php';
                    }

                    elseif ($_GET['halaman']=="hapususer") {
                        include 'hapususer.php';
                    }

                    elseif ($_GET['halaman']=="penjualan") {
                        include 'penjualan.php';
                    }

                    elseif ($_GET['halaman']=="hapuspenjualan") {
                        include 'hapuspenjualan.php';
                    }

                    elseif ($_GET['halaman']=="tambahpenjualan") {
                        include 'tambahpenjualan.php';
                    }
                }

                else{
                    include 'home.php';
                }
                ?>
            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

</body>
</html>
