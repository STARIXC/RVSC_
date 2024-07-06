<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['hbmsaid'] == 0)) {
	header('location:logout.php');
} else {
	if (isset($_POST['submit'])) {
		$hbmsaid = $_SESSION['hbmsaid'];
		$pagetitle = $_POST['pagetitle'];
		$pagedes = $_POST['pagedes'];
		$sql = "update tblpage set PageTitle=:pagetitle,PageDescription=:pagedes where  PageType='aboutus'";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pagetitle', $pagetitle, PDO::PARAM_STR);
		$query->bindParam(':pagedes', $pagedes, PDO::PARAM_STR);

		$query->execute();
		echo '<script>alert("About us has been updated")</script>';
		echo "<script>window.location.href ='aboutus.php'</script>";
	} ?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>Rift Valley Sports Club | About Us</title>

		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- jQuery -->
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- lined-icons -->
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<script src="js/simpleCart.min.js"> </script>
		<script src="js/amcharts.js"></script>
		<script src="js/serial.js"></script>
		<script src="js/light.js"></script>
		<!-- //lined-icons -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!--pie-chart--->
		<script src="js/pie-chart.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#demo-pie-1').pieChart({
					barColor: '#3bb2d0',
					trackColor: '#eee',
					lineCap: 'round',
					lineWidth: 8,
					onStep: function(from, to, percent) {
						$(this.element).find('.pie-value').text(Math.round(percent) + '%');
					}
				});

				$('#demo-pie-2').pieChart({
					barColor: '#fbb03b',
					trackColor: '#eee',
					lineCap: 'butt',
					lineWidth: 8,
					onStep: function(from, to, percent) {
						$(this.element).find('.pie-value').text(Math.round(percent) + '%');
					}
				});

				$('#demo-pie-3').pieChart({
					barColor: '#ed6498',
					trackColor: '#eee',
					lineCap: 'square',
					lineWidth: 8,
					onStep: function(from, to, percent) {
						$(this.element).find('.pie-value').text(Math.round(percent) + '%');
					}
				});


			});
		</script>
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
		<script type="text/javascript">
			bkLib.onDomLoaded(nicEditors.allTextAreas);
		</script>
	</head>

	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="inner-content">
					<!-- header-starts -->
					<?php include_once('includes/header.php'); ?>

					<!--content-->
					<div class="content">
						<div class="women_main">
							<!-- start content -->
							<div class="grids">
								<div class="progressbar-heading grids-heading">
									<h2>About Us</h2>
								</div>
								<div class="panel panel-widget forms-panel">
									<div class="forms">
										<div class="form-grids widget-shadow" data-example-id="basic-forms">
											<div class="form-title">
												<h4>About Us</h4>
											</div>
											<div class="form-body">

												<form method="post" enctype="multipart/form-data">
													<?php

													$sql = "SELECT * from  tblpage where PageType='aboutus'";
													$query = $dbh->prepare($sql);
													$query->execute();
													$results = $query->fetchAll(PDO::FETCH_OBJ);
													$cnt = 1;
													if ($query->rowCount() > 0) {
														foreach ($results as $row) {               ?>
															<div class="form-group"> <label for="exampleInputEmail1">Page Title</label> <input type="text" name="pagetitle" id="pagetitle" required="true" value="<?php echo $row->PageTitle; ?>" class="form-control"> </div>
															<div class="form-group"> <label for="exampleInputEmail1">Page Description</label> <textarea type="text" name="pagedes" id="pagedes" required="true" class="form-control"><?php echo $row->PageDescription; ?></textarea> </div>

													<?php $cnt = $cnt + 1;
														}
													} ?>


													<button type="submit" class="btn btn-default" name="submit">Update</button>
												</form>
											</div>
										</div>
									</div>
								</div>


							</div>

							<!-- end content -->

							<?php include_once('includes/footer.php'); ?>
						</div>

					</div>
					<!--content-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include_once('includes/sidebar.php'); ?>
			<div class="clearfix"></div>
		</div>
		<script>
			var toggle = true;

			$(".sidebar-icon").click(function() {
				if (toggle) {
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({
						"position": "absolute"
					});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({
							"position": "relative"
						});
					}, 400);
				}

				toggle = !toggle;
			});
		</script>
		<!--js -->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->
		<!-- real-time -->
		<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript">
			$(function() {

				// We use an inline data source in the example, usually data would
				// be fetched from a server

				var data = [],
					totalPoints = 300;

				function getRandomData() {

					if (data.length > 0)
						data = data.slice(1);

					// Do a random walk

					while (data.length < totalPoints) {

						var prev = data.length > 0 ? data[data.length - 1] : 50,
							y = prev + Math.random() * 10 - 5;

						if (y < 0) {
							y = 0;
						} else if (y > 100) {
							y = 100;
						}

						data.push(y);
					}

					// Zip the generated y values with the x values

					var res = [];
					for (var i = 0; i < data.length; ++i) {
						res.push([i, data[i]])
					}

					return res;
				}

				// Set up the control widget

				var updateInterval = 30;
				$("#updateInterval").val(updateInterval).change(function() {
					var v = $(this).val();
					if (v && !isNaN(+v)) {
						updateInterval = +v;
						if (updateInterval < 1) {
							updateInterval = 1;
						} else if (updateInterval > 2000) {
							updateInterval = 2000;
						}
						$(this).val("" + updateInterval);
					}
				});

				var plot = $.plot("#placeholder", [getRandomData()], {
					series: {
						shadowSize: 0 // Drawing is faster without shadows
					},
					yaxis: {
						min: 0,
						max: 100
					},
					xaxis: {
						show: false
					}
				});

				function update() {

					plot.setData([getRandomData()]);

					// Since the axes don't change, we don't need to call plot.setupGrid()

					plot.draw();
					setTimeout(update, updateInterval);
				}

				update();

				// Add the Flot version string to the footer

				$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
			});
		</script>
		<!-- /real-time -->
		<script src="js/jquery.fn.gantt.js"></script>
		<script>
			$(function() {

				"use strict";

				$(".gantt").gantt({
					source: [{
						name: "Sprint 0",
						desc: "Analysis",
						values: [{
							from: "/Date(1320192000000)/",
							to: "/Date(1322401600000)/",
							label: "Requirement Gathering",
							customClass: "ganttRed"
						}]
					}, {
						name: " ",
						desc: "Scoping",
						values: [{
							from: "/Date(1322611200000)/",
							to: "/Date(1323302400000)/",
							label: "Scoping",
							customClass: "ganttRed"
						}]
					}, {
						name: "Sprint 1",
						desc: "Development",
						values: [{
							from: "/Date(1323802400000)/",
							to: "/Date(1325685200000)/",
							label: "Development",
							customClass: "ganttGreen"
						}]
					}, {
						name: " ",
						desc: "Showcasing",
						values: [{
							from: "/Date(1325685200000)/",
							to: "/Date(1325695200000)/",
							label: "Showcasing",
							customClass: "ganttBlue"
						}]
					}, {
						name: "Sprint 2",
						desc: "Development",
						values: [{
							from: "/Date(1326785200000)/",
							to: "/Date(1325785200000)/",
							label: "Development",
							customClass: "ganttGreen"
						}]
					}, {
						name: " ",
						desc: "Showcasing",
						values: [{
							from: "/Date(1328785200000)/",
							to: "/Date(1328905200000)/",
							label: "Showcasing",
							customClass: "ganttBlue"
						}]
					}, {
						name: "Release Stage",
						desc: "Training",
						values: [{
							from: "/Date(1330011200000)/",
							to: "/Date(1336611200000)/",
							label: "Training",
							customClass: "ganttOrange"
						}]
					}, {
						name: " ",
						desc: "Deployment",
						values: [{
							from: "/Date(1336611200000)/",
							to: "/Date(1338711200000)/",
							label: "Deployment",
							customClass: "ganttOrange"
						}]
					}, {
						name: " ",
						desc: "Warranty Period",
						values: [{
							from: "/Date(1336611200000)/",
							to: "/Date(1349711200000)/",
							label: "Warranty Period",
							customClass: "ganttOrange"
						}]
					}],
					navigate: "scroll",
					scale: "weeks",
					maxScale: "months",
					minScale: "days",
					itemsPerPage: 10,
					onItemClick: function(data) {
						alert("Item clicked - show some details");
					},
					onAddClick: function(dt, rowId) {
						alert("Empty space clicked - add an item!");
					},
					onRender: function() {
						if (window.console && typeof console.log === "function") {
							console.log("chart rendered");
						}
					}
				});

				$(".gantt").popover({
					selector: ".bar",
					title: "I'm a popover",
					content: "And I'm the content of said popover.",
					trigger: "hover"
				});

				prettyPrint();

			});
		</script>
		<script src="js/menu_jquery.js"></script>
	</body>

	</html><?php
		}  ?>


<div class="main-wrapper mt-3">
    <!-- About Section -->
    <div class="aboutus section-search-content" style="font-size: 16px; line-height: 1.5em; text-align: justify;">
      <div class="container">
        <div class="search-result-item sale">
          <div class="row">
            <div class="col-md-12">
              <h1>Our Club</h1>
              <hr>
            </div>
            <div class="col-md-6">
              <div class="shadow-large overlap-right-large ">

                <div id="carouselExampleControls" class="carousel slide p-2" data-ride="carousel">

                  <ol class="carousel-indicators">
                    @foreach( $photos as $photo )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                      class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                  </ol>

                  <div class="carousel-inner" role="listbox">
                    @foreach( $photos as $photo )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                      <img class="d-block img-fluid" src="{{asset($photo->image_name)}}" alt="{{ $photo->image_name }}"
                        width="560" height="315">
                      <div class="carousel-caption d-none d-md-block">

                      </div>
                    </div>
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <p>
                In July, 2013, the Club officially opened its newly modern Health
                and Fitness centre comprising the following:
              </p>
              <ul class="extras">
                <li class="list-item">
                  <i class="fa fa-angle-double-right"></i> 100 pax capacity
                  Aerobics hall
                </li>
                <li class="list-item">
                  <i class="fa fa-angle-double-right"></i> 100 pax capacity
                  Gymnasium hall fully equipped
                </li>
                <li class="list-item">
                  <i class="fa fa-angle-double-right"></i> A ladies wing with
                  Sauna, Steam bath
                </li>
                <li class="list-item">
                  <i class="fa fa-angle-double-right"></i> A Gents wing with
                  Sauna, Steam Bath.
                </li>
              </ul>

            </div>

            <div class="col-md-6">
              <div class="skill">

                <h2 class="">
                  <span href="#"
                    style="font-family: Playfair Display, sans-serif; font-weight: bold; font-style: italic;"> Rift
                    Valley Sports Club</span></h2>
               

              </div>

            </div>
            <div class="col-md-12">
              <h1></h1>
              <hr>
            </div>
            <div class="col-md-12">

              <div class="skill  text-center col-md-12">
                <h3 class="section-title">Afilliate Clubs</h3>
                <p>
                  Rift Valley Sports Club has reciprocal arrangements with reputable
                  international and national Clubs which includes;
                </p>


              </div>
              <div class="row align-middle">
                <div class="col-md-6">
                  <h6 class="text-muted">Kenya</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Nairobi Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>United Kenya Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i> Parklands Sports
                      Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Gymkhana Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Mombasa Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Eldoret
                      Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Nanyuki Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Kitale Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Nyanza Club
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h6 class="text-muted">International Clubs</h6>
                  <ul class="list-group">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>India –</strong>Cricket Club of India
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>India –</strong>Karnavati Club of India
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>India –</strong> Juhu Vile Gymkhana Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>India –</strong>
                      Umed Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>India –</strong>
                      Pleasure Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>Qatar -</strong> Doha Club
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>
                      <strong>SRI LANKA–</strong> Colombo Swimming Club
                    </li>
                  </ul>
                </div>


              </div>
            </div>

            <div class="col-md-12">
              <h1></h1>
              <hr>
            </div>
            <div class="col-md-6">
              <h2>Mission</h2>
              <p>To develop and maintain the Club facilities to the highest standards
                in order to provide consistent and quality social events, sporting, recreational
                and hospitality services to our members and their guests.</p>



            </div>
            <div class="col-md-6">

              <h2>Vision</h2>
              <p>Our Vision is to be the most efficient, friendly and homely Member’s Club in the Country with
                International
                outlook.</p>

            </div>
            <div class="col-md-12">
              <h1></h1>
              <hr>
            </div>
            <div class="col-md-12">
              <h3 class="text-center">Core Values</h3>
              <div class="row">
                <div class="col-md-6">

                  <h6 class="text-muted">1) To uphold family values</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By being role models to our children through good
                      behavior.
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By promoting of togetherness in the family unit
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i> By creating activities for all age groups in the family
                      thereby
                      enhancing bonding
                      Club
                    </li>

                  </ul>

                  <h6 class="text-muted">2) To uphold good morals</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By discouraging anti-social behaviors like drug abuse,
                      improper mode
                      of dress, use of abusive language etc.
                    </li>

                  </ul>

                  <h6 class="text-muted">3) To encourage interpersonal relations</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By creating an atmosphere where every member and staff
                      regardless of race, religion etc feels welcome and appreciated.
                    </li>

                  </ul>

                  <h6 class="text-muted">4) To respect other members and their guests</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>To be civil in our approach when dealing with other
                      members
                      and
                      their guests.
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>To treat others as we would wish to be treated.
                    </li>

                  </ul>


                </div>
                <div class="col-md-6">
                  <br>
                  <h6 class="text-muted">5) To respect the rule of law.</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>To ensure adherence to all laws provided by the Clubs
                      Constitution
                      and those enacted by the state.
                    </li>

                  </ul>

                  <h6 class="text-muted">6) To respect and uphold the club’s constitution and bylaws.</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By putting in place sanctions to discourage members from
                      violating them.
                    </li>
                  </ul>
                  <h6 class="text-muted">7) To promote fair play, meritocracy and professionalism at all times</h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>Developing a good Performance Management System.
                    </li>
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>An effective feedback system that acknowledges one’s
                      performance through merit awards.
                    </li>

                  </ul>
                  <h6 class="text-muted">8) To operate to the highest level of probity, accountability and transparency.
                  </h6>
                  <ul class="list">
                    <li class="list-item">
                      <i class="fa fa-paper-plane mx-2"></i>By putting in place systems that ensure good financial
                      management, procurement systems and transparency in all dealings that the Club is involved in.

                    </li>

                  </ul>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>



  </div>