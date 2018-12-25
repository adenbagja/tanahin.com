<!DOCTYPE html>
<html>
<head>
	<title>API MAPS</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="maps.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map{
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Acces coogle map</h1></center>
		<div id="map"></div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlJHeuplReu4hRa_l5FiMXPShIQm1mJ5A&callback=initMap"async defer></script>

</body>
</html>