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
    <link rel="icon" href="images/favicon.png">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <style>
        nav>.nav.nav-tabs {
            border: none;
            color: #fff;
            background: #272e38;
            border-radius: 0;

        }

        nav>div a.nav-item.nav-link,
        nav>div a.nav-item.nav-link.active {
            border: none;
            padding: 18px 25px;
            color: #fff;
            background: #272e38;
            border-radius: 0;
        }

        nav>div a.nav-item.nav-link.active:after {
            content: "";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #cfa671;
        }

        .tab-content {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #cfa671;
            border-bottom: 5px solid #cfa671;
            padding: 30px 25px;
            width: 100%;
        }

        nav>div a.nav-item.nav-link:hover,
        nav>div a.nav-item.nav-link:focus {
            border: none;
            background: #cfa671;
            color: #fff;
            border-radius: 0;
            transition: background 0.20s linear;
        }

        .qt-background {
            background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.5270483193277311) 0%, rgba(0, 0, 0, 0.5130427170868348) 50%), url(images/bg.jpg) no-repeat;
            background-size: cover;
            padding: 100px 0;
            background-attachment: fixed;
            background-position: center center;
            position: relative;
        }

        .img-fluid {
            height: 250px;
        }

        .booking-card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            background-image: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(207, 166, 113, 0.4) 0%, rgba(207, 166, 113, 0.4) 50%), url(img/back.gif);
            background-size: cover;

            border-radius: 15px 50px;
        }

        .gradient-card {
            box-shadow: 0 8px 16px 0 #cfa671;
        }

        /* On mouse-over, add a deeper shadow */
        .booking-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.9);
        }

        .bg-f {
            background: linear-gradient(180deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0.5270483193277311) 0%, rgba(0, 0, 0, 0.5130427170868348) 50%), url(images/footer.jpg) no-repeat;
            background-size: cover;
        }

        #demo {
            display: flex;
        }

        #demo p {
            flex: 1;
        }

        .day7 {
            display: flex;
            float: left;
        }

        .day7 p {
            flex: 1;
        }

        .active-cyan-2 input.form-control[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid #4dd0e1;
            box-shadow: 0 1px 0 0 #4dd0e1;
        }

        .active-cyan .fa,
        .active-cyan-2 .fa {
            color: #4dd0e1;
        }
.easyPaginateNav a {padding:5px;}
.easyPaginateNav a.current {font-weight:bold;text-decoration:underline;}
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
                        <li class="nav-item active"><a class="nav-link" href="new.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="json.php">Past 30 Days</a></li>
                        <li class="nav-item"><a class="nav-link" href="week.php">Past 7 Days</a></li>
                        <li class="nav-item"><a class="nav-link" href="day.php">Past Day</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/s1.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Tectonic Earthquakes</strong></h1>
                            <p class="m-b-40">Earthquakes caused by plate tectonics are called tectonic quakes. They account for most earthquakes worldwide and usually occur at the boundaries of tectonic plates.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/s2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Induced Earthquakes</strong></h1>
                            <p class="m-b-40">Induced quakes are caused by human activity, like tunnel construction, filling reservoirs and implementing geothermal or fracking projects.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/s3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Volcanic Earthquakes</strong></h1>
                            <p class="m-b-40">Volcanic quakes are associated with active volcanism. They are generally not as powerful as tectonic quakes and often occur relatively near the surface. Consequently, they are usually only felt in the vicinity of the hypocentre.</p>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/earthex.gif" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>What is an <span>earthquake</span>?</h1>

                        <p>An earthquake is what happens when two blocks of the earth suddenly slip past one another. The surface where they slip is called the fault or fault plane. The location below the earth’s surface where the earthquake starts is called the hypocenter, and the location directly above it on the surface of the earth is called the epicenter. </p>

                        <!--<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " The largest earthquake ever recorded was a magnitude 9.5 on May 22, 1960 in Chile on a fault that is almost 1,000 miles long "
                    </p>
                    <span class="lead">MegaQuake</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Earthquakes Count -->
    <div class="menu-box">
        <div class="container">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>All Earthquakes</h2>
                    <p>Earthquake Statistic</p>
                </div>
            </div>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">

                        <div class="card-image" style="background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(207,166,113,0.4) 0%, rgba(207,166,113,0.4) 50%), url(images/c4.gif); background-size: cover;">
                            <!-- Content -->
                            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h1 id="day" class="card-title"></h1>
                                    <h1 class="card-title">Past Day</h1>
                                </div>
                                <div class="second-content align-self-center mx-auto text-center">
                                    <i class="far fa-money-bill-alt fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">

                        <div class="card-image" style="background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(207,166,113,0.4) 0%, rgba(207,166,113,0.4) 50%), url(images/c4.gif); background-size: cover;">
                            <!-- Content -->
                            <div class="text-white d-flex h-100 mask purple-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h1 id="week" class="card-title"></h1>
                                    <h1 class="card-title">Past 7 Days</h1>
                                </div>
                                <div class="second-content  align-self-center mx-auto text-center">
                                    <i class="fas fa-chart-line fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">
                    <!-- Card -->
                    <div class="card gradient-card">
                        <div class="card-image" style="background-image: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(207,166,113,0.4) 0%, rgba(207,166,113,0.4) 50%), url(images/c4.gif); background-size: cover;">
                            <!-- Content -->
                            <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h1 id="month" class="card-title"></h1>
                                    <h1 class="card-title">Past 30 Days</h1>
                                </div>
                                <div class="second-content  align-self-center mx-auto text-center">
                                    <i class="fas fa-chart-pie fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </div>
    <!-- End Earthquakes Count -->


    <!-- Start Significant Earthquakes -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Significant Earthquakes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Past Day</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="click1()">Past Week</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" onclick="click2()">Past Month</a>

                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="width: 100%">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="col-lg-12">
                                        <!-- Leaflet Map -->
                                        <div id='mapid' style='width: 100%; height: 400px;'></div>
                                        <!-- End Leaflet Map -->
                                        <br />
                                        <!-- Search Form -->
                                        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">

                                            <input id="filter2" class="form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                                            <select class="form-control-sm mr-3 event-type-select2">
                                                <option value=" ">All Magnitude</option>

                                                <?php
		 $xmlDoc=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.quakeml");
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
                                        <!-- End Search Form -->
                                        <br />
                                        <!-- Earthquakes Listing -->
                                        <div class="row" id="demo2">

                                            <?php
		 $xmlDoc=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.quakeml");
		 foreach($xmlDoc ->children() as $eventParameters)
            {
	           // Get all Events
	           foreach($eventParameters-> event as $event)
	               {
		              // Get all description of earthquake
		              foreach($event-> description as $desc)
		                  { 
			                 echo "	<span class='col-md-3 day7' style='padding-bottom: 20px;'><div>
	                           <!-- Card -->
                                <div class='card booking-card'>
                                <!-- Card image -->
                                    <div class='view overlay'>
                                        <a href='#!'>
                                            <div class='mask rgba-white-slight'></div>
                                        </a>
                                    </div>
                                <!-- Card content -->
                                <div class='card-body'><h3 class='card-title font-weight-bold'><a>".$desc->text ."</a></h3><hr class='my-4'>";
		                  }

		              // Get all Time of earthquake
		              foreach($event->origin->time as $time)
		                {
		              	echo "<p><b>Time:</b>".$time->value."</p>";
		                }
		              // Get all longitude of earthquake
		              foreach($event->origin->longitude as $longitude)
		                {
		              	echo "<p class='card-text'><b>Longitude:</b> ".$longitude->value ."</p>";
		                }
		              // Get all latitude of earthquake
		              foreach($event->origin->latitude as $latitude)
		                {
		              	echo "<p class='card-text'><b>Latitude:</b> ".$latitude->value ."</p>";
		                }
		              //Get all magnitude of earthquake
                        foreach($event->magnitude->mag as $magnitude)
                            {
                                echo "<p><strong><b>Magnitude:</b> ".$magnitude->value ."</strong></p><hr class='my-4'><a href='details.php?desc=$desc->text&time=$time->value&lat=$latitude->value&long=$longitude->value' class='btn btn-outline-primary' style='align: right;'>Details</a></div></div><!-- Card --></div></span>";
                            }

	               }

            }
		?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="col-lg-12">
                                        <!-- Leaflet Map -->
                                        <div id='mapid1' style='width: 100%; height: 400px;'></div>
                                        <br />
                                        <!-- Search Form -->
                                        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">

                                            <input id="filter1" class="form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search"><select class="form-control-sm mr-3 event-type-select1">
                                                <option value=" ">All Magnitude</option>

                                                <?php
		 $xmlDoc1=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_week.quakeml");
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
		?>                           </select>

                                        </form>
                                        <br />
                                        <div class="row" id="demo1">

                                            <?php
		 $xmlDoc1=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_week.quakeml");
		 foreach($xmlDoc ->children() as $eventParameters)
            {
	           // Get all Events
	           foreach($eventParameters-> event as $event)
	               {
		              // Get all description of earthquake
		              foreach($event-> description as $desc)
		                  { 
			                 echo "	<span class='col-md-3 day7' style='padding-bottom: 20px;'><div>
	                           <!-- Card -->
                                <div class='card booking-card'>
                                <!-- Card image -->
                                    <div class='view overlay'>
                                        <a href='#!'>
                                            <div class='mask rgba-white-slight'></div>
                                        </a>
                                    </div>
                                <!-- Card content -->
                                <div class='card-body'><h3 class='card-title font-weight-bold'><a>".$desc->text ."</a></h3><hr class='my-4'>";
		                  }
		              // Get all Time of earthquake
		              foreach($event->origin->time as $time)
		                {
		              	echo "<p><b>Time:</b>".$time->value."</p>";
		                }
		              // Get all longitude of earthquake
		              foreach($event->origin->longitude as $longitude)
		                {
		              	echo "<p class='card-text'><b>Longitude:</b> ".$longitude->value ."</p>";
		                }
		              // Get all latitude of earthquake
		              foreach($event->origin->latitude as $latitude)
		                {
		              	echo "<p class='card-text'><b>Latitude:</b> ".$latitude->value ."</p>";
		                }
		              //Get all magnitude of earthquake
                        foreach($event->magnitude->mag as $magnitude)
                            {
                                echo "<p><strong><b>Magnitude:</b> ".$magnitude->value ."</strong></p><hr class='my-4'><a href='details.php?desc=$desc->text&time=$time->value&lat=$latitude->value&long=$longitude->value' class='btn btn-outline-primary' style='align: right;'>Details</a></div></div><!-- Card --></div></span>";
                            }

	               }

            }
		?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="col-lg-12">
                                        <!-- Leaflet Map -->
                                        <div id='mapid2' style='width: 100%; height: 400px;'></div>
                                        <br />
                                        <!-- Search Form -->
                                        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                                            <input id="filter" class="form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search"><select class="form-control-sm mr-3 event-type-select">
                                                <option value=" ">All Magnitude</option>
                                                <?php
		 $xmlDoc2=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_month.quakeml");
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
                                        <div class="row" id="demo">
                                            <?php
		 $xmlDoc2=simplexml_load_file("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/significant_month.quakeml");
		 foreach($xmlDoc ->children() as $eventParameters)
            {
	           // Get all Events
	           foreach($eventParameters-> event as $event)
	               {
		              // Get all description of earthquake
		              foreach($event-> description as $desc)
		                  { 
			                 echo "	<span class='col-md-3 day7' style='padding-bottom: 20px;'><div>
	                           <!-- Card -->
                                <div class='card booking-card'>
                                <!-- Card image -->
                                    <div class='view overlay'>
                                        <a href='#!'>
                                            <div class='mask rgba-white-slight'></div>
                                        </a>
                                    </div>
                                <!-- Card content -->
                                <div class='card-body'><h3 class='card-title font-weight-bold'><a>".$desc->text ."</a></h3><hr class='my-4'>";
		                  }

		              // Get all Time of earthquake
		              foreach($event->origin->time as $time)
		                {
		              	echo "<p><b>Time:</b>".$time->value."</p>";
		                }
		              // Get all longitude of earthquake
		              foreach($event->origin->longitude as $longitude)
		                {
		              	echo "<p class='card-text'><b>Longitude:</b> ".$longitude->value ."</p>";
		                }
		              // Get all latitude of earthquake
		              foreach($event->origin->latitude as $latitude)
		                {
		              	echo "<p class='card-text'><b>Latitude:</b> ".$latitude->value ."</p>";
		                }
		              //Get all magnitude of earthquake
                        foreach($event->magnitude->mag as $magnitude)
                            {
                                echo "<p><strong><b>Magnitude:</b> ".$magnitude->value ."</strong></p><hr class='my-4'><a href='details.php?desc=$desc->text&time=$time->value&lat=$latitude->value&long=$longitude->value' class='btn btn-outline-primary' style='align: right;'>Details</a></div></div><!-- Card --></div></span>";
                            }

	               }

            }
		?>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Menu -->
    <br />
    <!-- Earthquake Statistic -->
    <div class="col-lg-12">
        <div class="heading-title text-center">
            <h2>Earthquake Statistic</h2>
            <hr />
        </div>
        <div class="row">
            <!-- Chart of Earthquakes count -->
            <canvas id="myChart" width="100%" height="30%"></canvas>
        </div>
    </div>
    <!-- End Earthquake Statistic -->
    <br />
    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Gallery</h2>
                        <hr />
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/s1.jpg">
                            <img class="img-fluid" src="images/s1.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/s2.jpg">
                            <img class="img-fluid" src="images/s2.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/s3.jpg">
                            <img class="img-fluid" src="images/s3.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/bg.jpg">
                            <img class="img-fluid" src="images/bg.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/s4.jpg">
                            <img class="img-fluid" src="images/s4.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/s5.jpg">
                            <img class="img-fluid" src="images/s5.jpg" alt="Gallery Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Earthquake Sayings and Quotes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">

                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Charles Kuralt</strong></h5>

                                <p class="m-0 pt-3">It takes an earthquake to remind us that we walk on the crust of an unfinished planet.</p>
                            </div>
                            <div class="carousel-item text-center">

                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Bertrand Russell</strong></h5>

                                <p class="m-0 pt-3">As for earthquakes, though they were still formidable, they were so interesting that men of science could hardly regret them.</p>
                            </div>
                            <div class="carousel-item text-center">

                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Reginald Aldworth Daly</strong></h5>

                                <p class="m-0 pt-3">Earthquakes traveling through the interior of the globe are like so many messengers sent out to explore a new land. The messages are constantly coming and seismologists are fast learning to read them.</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Reviews -->



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

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
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
    <!-- 3D Card Effect -->
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400
        });

    </script>
    <!-- Past Day Map -->
    <script>
        var mymap = L.map('mapid', {
            center: [20.0, 5.0],
            minZoom: 1,
            zoom: 2
        })
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

        <?php foreach ($xmlDoc -> eventParameters -> event as $info) : ?>
        var lat = <?php echo $latitude = $info -> origin-> latitude -> value; ?>;
        var long = <?php echo $longitude = $info -> origin-> longitude -> value; ?>;
        var mag = <?php echo $magnitude = $info -> magnitude->mag->value; ?>;
        var region = "<?php echo $region1 =$info -> description -> text; ?>"

        var marker = L.marker([lat, long]).addTo(mymap);
        marker.bindPopup(region);



        var circle = L.circle([lat, long], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 100
        }).addTo(mymap);
        <?php endforeach; ?>

    </script>
    <!-- Past 7 Days Map -->
    <script>
        var mymap1 = L.map('mapid1', {
            center: [20.0, 5.0],
            minZoom: 1,
            zoom: 2
        })
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
        }).addTo(mymap1);

        <?php foreach ($xmlDoc1 -> eventParameters -> event as $info) : ?>
        var lat = <?php echo $latitude = $info -> origin-> latitude -> value; ?>;
        var long = <?php echo $longitude = $info -> origin-> longitude -> value; ?>;
        var mag = <?php echo $magnitude = $info -> magnitude->mag->value; ?>;
        var region = "<?php echo $region1 =$info -> description -> text; ?>"

        var marker = L.marker([lat, long]).addTo(mymap1);
        marker.bindPopup(region);


        function click2() {

            mymap1._onResize();

        }



        var circle = L.circle([lat, long], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 100
        }).addTo(mymap1);
        <?php endforeach; ?>

    </script>
    <!-- Past 30 Days Map -->
    <script>
        var mymap2 = L.map('mapid2', {
            center: [20.0, 5.0],
            minZoom: 2,
            zoom: 2
        })
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
        }).addTo(mymap2);

        <?php foreach ($xmlDoc2 -> eventParameters -> event as $info) : ?>
        var lat = <?php echo $latitude = $info -> origin-> latitude -> value; ?>;
        var long = <?php echo $longitude = $info -> origin-> longitude -> value; ?>;
        var mag = <?php echo $magnitude = $info -> magnitude->mag->value; ?>;
        var region = "<?php echo $region1 =$info -> description -> text; ?>"

        var marker = L.marker([lat, long]).addTo(mymap2);
        marker.bindPopup(region);

        function click1() {

            mymap2._onResize();

        }

        var circle = L.circle([lat, long], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 100
        }).addTo(mymap2);
        <?php endforeach; ?>

    </script>
    <!-- Search Bar -->
    <script>
        $("#filter").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter = $(this).val(),
                count = 0;

            // Loop through the comment list
            $('#demo div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter, "i")) < 0) {
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
        $(".event-type-select").change(function() {
            var selectedEventType = this.options[this.selectedIndex].value;
            count = 0;

            // Loop through the comment list
            $('#demo div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(selectedEventType, "i")) < 0) {
                    $(this).hide(); // MY CHANGE

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).show(); // MY CHANGE
                    count++;
                }

            });
        });

    </script>
    <!-- Search Bar -->
    <script>
        $("#filter1").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter1 = $(this).val(),
                count = 0;

            // Loop through the comment list
            $('#demo1 div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(filter1, "i")) < 0) {
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
        $(".event-type-select1").change(function() {
            var selectedEventType1 = this.options[this.selectedIndex].value;
            count = 0;

            // Loop through the comment list
            $('#demo1 div').each(function() {


                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(selectedEventType1, "i")) < 0) {
                    $(this).hide(); // MY CHANGE

                    // Show the list item if the phrase matches and increase the count by 1
                } else {
                    $(this).show(); // MY CHANGE
                    count++;
                }

            });
        });

    </script>
    <!-- Search Bar -->
    <script>
        $("#filter2").keyup(function() {

            // Retrieve the input field text and reset the count to zero
            var filter2 = $(this).val(),
                count = 0;

            // Loop through the comment list
            $('#demo2 div').each(function() {


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
            $('#demo2 div').each(function() {


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
    <!-- Count -->
    <script>
        var xmlhttp, myObj;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                document.getElementById("day").innerHTML = myObj.metadata.count;
            }
        };
        xmlhttp.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson", true);
        xmlhttp.send();

        var xmlhttp, myObj1;
        xmlhttp1 = new XMLHttpRequest();
        xmlhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj1 = JSON.parse(this.responseText);
                document.getElementById("week").innerHTML = myObj1.metadata.count;
            }
        };
        xmlhttp1.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_week.geojson", true);
        xmlhttp1.send();

        var xmlhttp2, myObj2;
        xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj2 = JSON.parse(this.responseText);
                document.getElementById("month").innerHTML = myObj2.metadata.count;
            }
        };
        xmlhttp2.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.geojson", true);
        xmlhttp2.send();

    </script>
    <!-- Chart Count -->
    <script>
        var count = [];
        var count1 = [];
        var count2 = [];
        var xmlhttp, myObj;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj = JSON.parse(this.responseText);
                count.push(myObj.metadata.count);
            }
        };
        xmlhttp.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_day.geojson", true);
        xmlhttp.send();

        var xmlhttp, myObj1;
        xmlhttp1 = new XMLHttpRequest();
        xmlhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj1 = JSON.parse(this.responseText);
                count.push(myObj1.metadata.count);
            }
        };
        xmlhttp1.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojson", true);
        xmlhttp1.send();

        var xmlhttp2, myObj2;
        xmlhttp2 = new XMLHttpRequest();
        xmlhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj2 = JSON.parse(this.responseText);
                count.push(myObj2.metadata.count);
            }
        };
        xmlhttp2.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson", true);
        xmlhttp2.send();

        var xmlhttp3, myObj3;
        xmlhttp3 = new XMLHttpRequest();
        xmlhttp3.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj3 = JSON.parse(this.responseText);
                count1.push(myObj3.metadata.count);
            }
        };
        xmlhttp3.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_day.geojson", true);
        xmlhttp3.send();

        var xmlhttp4, myObj4;
        xmlhttp4 = new XMLHttpRequest();
        xmlhttp4.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj4 = JSON.parse(this.responseText);
                count1.push(myObj4.metadata.count);
            }
        };
        xmlhttp4.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojson", true);
        xmlhttp4.send();

        var xmlhttp5, myObj5;
        xmlhttp5 = new XMLHttpRequest();
        xmlhttp5.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj5 = JSON.parse(this.responseText);
                count1.push(myObj5.metadata.count);
            }
        };
        xmlhttp5.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_month.geojson", true);
        xmlhttp5.send();
        
        var xmlhttp6, myObj6;
        xmlhttp6 = new XMLHttpRequest();
        xmlhttp6.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj6 = JSON.parse(this.responseText);
                count2.push(myObj6.metadata.count);
            }
        };
        xmlhttp6.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_day.geojson", true);
        xmlhttp6.send();
        
        var xmlhttp7, myObj7;
        xmlhttp7 = new XMLHttpRequest();
        xmlhttp7.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj7 = JSON.parse(this.responseText);
                count2.push(myObj7.metadata.count);
            }
        };
        xmlhttp7.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_week.geojson", true);
        xmlhttp7.send();

        var xmlhtt8, myObj8;
        xmlhttp8 = new XMLHttpRequest();
        xmlhttp8.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myObj8 = JSON.parse(this.responseText);
                count2.push(myObj8.metadata.count);
            }
        };
        xmlhttp8.open("GET", "https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/1.0_month.geojson", true);
        xmlhttp8.send();
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Past Day', 'Past 7 Days', 'Past 30 Days', ],
                datasets: [{
                    label: '1.0+ Earthquakes',
                    data: count2,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    order: 3,
                    borderWidth: 3
                }, {
                    label: '2.5+ Earthquakes',
                    data: count1,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)'
                        //'rgba(255, 206, 86, 0.2)'
                    ],
                    type: 'line',
                    order: 2
                }, {
                    label: '4.5+ Earthquakes',
                    data: count,
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    type: 'line',
                    order: 1
                }]
            }
        });

    </script>
	<script src="js/jquery.easyPaginate.js"></script>
	<script>
	$('#demo').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 4,
    effect: 'default'
});
	</script>
		<script>
	$('#demo1').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 4,
    effect: 'default'
});
	</script>
		<script>
	$('#demo2').easyPaginate({
    paginateElement: 'span',
    elementsPerPage: 4,
    effect: 'default'
});
	</script>
</body>

</html>
