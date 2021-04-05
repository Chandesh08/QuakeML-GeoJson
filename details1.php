<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            background-image: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(207, 166, 113, 0.4) 0%, rgba(207, 166, 113, 0.4) 50%), url(img/back.gif);
            background-size: cover;

            border-radius: 15px 50px;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.9);
        }

        .bg-f {
            background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.5270483193277311) 0%, rgba(0, 0, 0, 0.5130427170868348) 50%), url(images/footer.jpg) no-repeat;
            background-size: cover;
        }

        .page-breadcrumb {
            background: url(images/footer.jpg) no-repeat;
            background-size: cover;
        }

        .hh {
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- Start header -->
    <header class="top-navbar" style='z-index: 3000;'>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="new.php">
                    <img src="images/logo.png" alt="" height="50px" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="new.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="json.php">Past 30 Days</a></li>
                        <li class="nav-item"><a class="nav-link" href="week.php">Past 7 Days</a></li>
                        <li class="nav-item"><a class="nav-link" href="day.php">Past Day</a></li>
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
                    <h1><?php echo $_GET['desc'] ?></h1>
                    <strong>
                        <p><?php echo $_GET['time'] ?></p>
                    </strong>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start container -->
    <div class="reservation-box">
        <div class="container">
            <div class="col-lg-12">
                <!-- Leaflet Map -->
                <div id='mapid' style='width: 100%; height: 600px;'></div>
                <br />

                <?php
					//Retrieve info from xmlDoc
 $ReadFromXML = simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_week.quakeml");
$t = $_GET['time'];
 //Get EventParameters
 foreach($ReadFromXML ->children() as $eventParameters)
 {
	// Get all Events
	foreach($eventParameters-> event as $event)
	{
		// Get all description of earthquake
		foreach($event-> description as $desc)
		{
			
		}

		// Get all Time of earthquake
		foreach($event->origin->time as $time)
		{
			
		}
		foreach($event->origin->longitude as $longitude)
		{
			
		}

		// Get all latitude of earthquake
		foreach($event->origin->latitude as $latitude)
		{
			
		}
		foreach($event->origin->creationInfo as $creationInfo)
		{
			
		}
		foreach($event->origin->quality as $quality)
		{
			
		}

		//Get all magnitude of earthquake
    foreach($event->magnitude->mag as $magnitude)
    {
      
	  if($time->value==$t){
				echo "<div class='col-lg-12'><h2 class='hh'><b>".$desc->text ."</b></h2><hr/>";
				echo "<div class='row'><div class='col-lg-4'><h4><b>Time:</b> ".$time->value ."</h4>";
				echo "<h4><b>Longitude:</b> ".$longitude->value ."</h4>";
				echo "<h4><b>Latitude:</b> ".$latitude->value ."</h4>";
				echo "<h4><b>Magnitude:</b> ".$magnitude->value ."</h4></div><div class='col-lg-4'>";
				echo "<h4><b>Creation Time:</b> ".$creationInfo->creationTime ."</h4>";
				echo "<h4><b>Phase Count:</b> ".$quality->usedPhaseCount ."</h4>";
				echo "<h4><b>Standard Error:</b> ".$quality->standardError ."</h4>";
				echo "<h4><b>Azimuthal Gap:</b> ".$quality->azimuthalGap ."</h4>";
				echo "</div><div class='col-lg-4'>";
				echo "<h4 style = 'text-transform:capitalize;'><b>Agency:</b> ".$creationInfo->agencyID ."</h4>";
				echo "<h4><b>Station Count:</b> ".$event->magnitude->stationCount ."</h4>";
				echo "<h4><b>Miminum Distance:</b> ".$quality->minimumDistance ."</h4>";
				echo "<h4><b>Magnitude Uncertainty:</b> ".$magnitude->uncertainty."</h4>";
				echo "</div></div></div>";
			}
    }
	}
 }
		?>



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
    <!-- Leaflet Map -->
    <script type="text/javascript">
        //call to getCurrentPosition function
        navigator.geolocation.getCurrentPosition(userLocated, locationError);

        function userLocated(position) {
            var latitude = <?php echo $_GET['lat'] ?>;
            var longitude = <?php echo $_GET['long'] ?>;


            var mymap = L.map('mapid').setView([latitude, longitude], 13);
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                maxZoom: 19,
                attribution: 'Map data &copy;' +
                    '<a href="https://www.openstreetmap.org/">OpenStreetMap</a>' +
                    'contributors,<a href="https://creativecommons.org/licenses' +
                    '/by-sa/2.0/">CC-BY-SA</a>,Imagery © <a href="https://' +
                    'www.mapbox.com/">Mapbox</a>',
                id: 'mapbox.streets',
                accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYyc' +
                    'XBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
            }).addTo(mymap);

            var marker = L.marker([latitude, longitude]).addTo(mymap);

            //
            var circle = L.circle([latitude, longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 300
            }).addTo(mymap);

        }

        function locationError(error) {

            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("Permission Denied- " + error.message);
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Position Not Available- " + error.message);
                    break;
                case error.TIMEOUT:
                    alert("Request Time out- " + error.message);
                    break;
            }
        }

    </script>
</body>

</html>
