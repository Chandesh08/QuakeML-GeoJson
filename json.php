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
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
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

    </style>
    <script>
        window.onload = function() {

            var dataPoints = [];

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "M4.5+ Earthquakes, Past Month"
                },
                axisY: {
                    title: "Magnitude",
                    titleFontSize: 24,
                    includeZero: false
                },
                axisX: {
                    title: "Date",
                    interval: 2,
                    intervalType: "day",
                },
                data: [{
                    type: "spline",
                    yValueFormatString: "#.# Mag",
                    dataPoints: dataPoints
                }]
            });

            function addData(data) {

                for (i in myObj.features) {
                    dataPoints.push({
                        x: new Date(myObj.features[i].properties['time']),
                        y: myObj.features[i].properties['mag']
                    });
                }

                chart.render();

            }

            $.getJSON("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson", addData);

        }

    </script>
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
                        <li class="nav-item active"><a class="nav-link" href="json.php">Past 30 Days</a></li>
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
                    <h1>Past 30 Days</h1>
                    <strong>
                        <p>M4.5+ Earthquakes</p>
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
                <br />
                <!-- Chart -->
                <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                <hr />
                <!-- Leaflet Map -->
                <div class="map" style="width: 100%; height: 400px;">
                </div>
                <br />
                <!-- Search Form -->
                <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                    <input id="filter2" class="form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                    <select class="form-control-sm mr-3 event-type-select2">
                        <option value=" ">All Magnitude</option>

                        <?php
		 $xmlDoc=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.quakeml");
            foreach($xmlDoc ->children() as $eventParameters)
            {
	           // Get Events loop
	           foreach($eventParameters-> event as $event)
	               {
		              //Get magnitude of earthquake lopp
                        foreach($event->magnitude->mag as $magnitude)
                            {
                                echo "<option value='Magnitude: ".$magnitude->value ."'>Magnitude: ".$magnitude->value ."</option>";
                            }
	               }

            }
		?>
                    </select>
                </form>
                <br />
                <!-- Earthquakes Listing -->
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
    <script src="js/vanilla.js"></script>
    <!-- Earthquakes Listing -->
    <script>
        var xmlhttp, myObj, x, j, txt = "";
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                for (x in myObj.features) {
                    txt += "<span class='col-md-3' style='padding-bottom: 20px;'><div><div class='card booking-card'><div class='view overlay'><a href='#!'><div class='mask rgba-white-slight'></div></a></div><div class='card-body'><h3 class='card-title font-weight-bold'><a>" + myObj.features[x].properties['place'] + "</a></h3><hr class='my-4'>";
                    txt += "<p><b>Time: </b>" + new Date(myObj.features[x].properties['time']) + "</p>"
                    txt += "<p class='card-text'><b>Coordinates:</b> " + myObj.features[x].geometry['coordinates'] + "</p>";
                    txt += "<p><strong><b>Magnitude:</b> " + myObj.features[x].properties['mag'] + "</strong></p><hr class='my-4'><a href='" + myObj.features[x].properties['url'] + "' class='btn btn-outline-primary' style='align: right;'>Details</a></div></div></div></span>";
                }

                document.getElementById("easyPaginate").innerHTML = txt;
            }
        };
        xmlhttp.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson", true);
        xmlhttp.send();
    </script>
    <!-- Leaflet Map -->
    <script>
        (function() {
            var FEED = 'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson'
            var NOW = new Date();

            // create map
            var map = L.map(document.querySelector('.map'));
            // center in colorado
            map.setView([20.0, 5.0], 2);
            // add basemap
            L.tileLayer('https://services.arcgisonline.com/arcgis/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
                /**
                 * http://services.arcgisonline.com/arcgis/rest/services/World_Topo_Map/MapServer?f=pjson
                 * copyrightText
                 */
                attribution: 'Sources: Esri, HERE, DeLorme, Intermap, increment P Corp., GEBCO, USGS, FAO, NPS, NRCAN,' +
                    ' GeoBase, IGN, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), swisstopo,' +
                    ' MapmyIndia, &copy;OpenStreetMap contributors, and the GIS User Community'
            }).addTo(map);

            // add earthquake layer
            var earthquakes = L.geoJson([], {
                onEachFeature: function(feature, layer) {
                    var props = feature.properties;

                    layer.bindPopup('<a href="' + props.url + '">' + props.title + '</a>');
                },
                pointToLayer: function(feature, latlng) {
                    var color,
                        mag,
                        radius;

                    mag = feature.properties.mag;
                    if (mag === null) {
                        color = '#fff';
                        radius = 2;
                    } else {
                        color = '#00f';
                        radius = 2 * Math.max(mag, 1);
                    }

                    if (feature.properties.type === 'quarry blast') {
                        color = '#f00';
                    }

                    return L.circleMarker(latlng, {
                        color: color,
                        radius: radius
                    });
                }
            }).addTo(map);

            // load data asynchronously
            var xhr = new XMLHttpRequest();
            xhr.onload = function() {
                var results = JSON.parse(xhr.responseText);
                earthquakes.addData(results);
            };
            xhr.open('GET', FEED, true);
            xhr.send();
        })();

    </script>
    <!-- Search Bar -->
    <script>
        $("#filter2").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter2 = $(this).val(),
                count = 0;

            // Loop through the comment list
            $('#easyPaginate div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter2, "i")) < 0) {
                    $(this).hide(); // MY CHANGE

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).show(); // MY CHANGE
                    count++;
                }

            });

        });

    </script>
    <!-- Dropdown -->
    <script>
        $(".event-type-select2").change(function() {
            var selectedEventType2 = this.options[this.selectedIndex].value;
            count = 0;

            // Loop through the comment list
            $('#easyPaginate div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(selectedEventType2, "i")) < 0) {
                    $(this).hide(); // MY CHANGE

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).show(); // MY CHANGE
                    count++;
                }

            });
        });

    </script>
</body>

</html>
