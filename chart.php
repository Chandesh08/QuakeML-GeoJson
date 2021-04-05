<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Earthquakes</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/leaflet.js"></script>
	<link rel="stylesheet" href="css/leaflet.css" />

	<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<style>

		.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(207,166,113,0.4) 0%, rgba(207,166,113,0.4) 50%), url(img/back.gif);
  background-size: cover;
  
  border-radius: 15px 50px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}
.bg-f{
	background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5270483193277311) 0%, rgba(0,0,0,0.5130427170868348) 50%), url(images/footer.jpg) no-repeat;
	background-size: cover;
}
.page-breadcrumb{
	background: url(images/footer.jpg) no-repeat;
	background-size: cover;
}
</style>
<script>
window.onload = function() {

var dataPoints = [];

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "M4.5+ Earthquakes, Past Day"
	},
	axisY: {
		title: "Magnitude",
		titleFontSize: 24,
		includeZero: false
	},
	axisX:{
		title: "Hour",
   interval: 2,
   intervalType: "hour",
 },
	data: [{
		type: "doughnut",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: dataPoints
	}]
});
function addData(data) {

	for (i in myObj.features) {
		dataPoints.push({
			label: new Date(myObj.features[i].properties['time']),
			y: myObj.features[i].properties['mag']
		});
	}
	
	
	chart.render();

}

$.getJSON("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson", addData);

}
</script>
</head>

<body>
	<!-- Start header -->
	<header class="top-navbar" style='z-index: 3000;'>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" height="50px" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Past Day</h1>
					<strong><p>M4.5+ Earthquakes</p></strong>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start container -->
	<div class="reservation-box">
		<div class="container">
	<div class="col-lg-12">
		 <!--<div id='mapid' style='width: 100%; height: 600px;'></div>-->
		 <br/>
		 
		 <div id="chartContainer" style="height: 500px; width: 100%;"></div>

		 

		 <br/>
<div class="row" id="easyPaginate">







</div>
	</div>
	</div>
	</div>
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About</h3>
					<p>A web app that read the QuakeML and GeoJson files and properly list all earthquakes. The web app also provide important details for each
earthquake (e.g. magnitude, location, etc).</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Requirements</h3>
					<p><span class="text-color">HTML</span></p>
					<p><span class="text-color">JavaScript</span></p>
					<p><span class="text-color">PHP</span></p>
					<p><span class="text-color">JSON</span></p>
					<p><span class="text-color">XML</span></p>
				</div>
				<div class="col-lg-6 col-md-6">
					<h3>References</h3>
					<p class="lead">USGS - <a href="https://earthquake.usgs.gov/earthquakes/feed/v1.0/quakeml.php">XML</a> and <a href="https://earthquake.usgs.gov/earthquakes/feed/v1.0/geojson.php">JSON Data</a></p>
					<p class="lead"><a href="https://www.w3schools.com/php/DEFAULT.asp">W3SCHOOL for PHP Tutorials</a></p>
				</div>
			</div>
		</div>

		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<script src="js/jquery.js"></script>


	<!-- ALL JS FILES -->
	
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
		
	<script>
		var xmlhttp, myObj, x, j, txt = "";
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
myObj = JSON.parse(this.responseText);
}
};
xmlhttp.open("GET","https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson", true);
xmlhttp.send();
</script>
<script>
		var xmlhttp, myObj1, x, j, txt = "";
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
myObj1 = JSON.parse(this.responseText);
}
};
xmlhttp.open("GET","https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojson", true);
xmlhttp.send();
</script>
<script>

</body>
</html>