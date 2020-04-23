<?php
    ob_start();
    session_start();
    error_reporting();

    include_once "koneksi.php";
    if ($_SESSION['admin'] || $_SESSION['user']){

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	
	<!-- Template Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<!-- CSS Reset -->
	<link rel="stylesheet" href="css/normalize.css">
	
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="css/milligram.min.css">
	
	<!-- Main Styles -->
	<link rel="stylesheet" href="css/styles.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title"><a href="?projek_uts=home.php" class="site-title float-left">Web Desain</a></div>
			<div class="column column-40 col-search"><a href="#" class="search-btn fa fa-search"></a>
				<input type="text" name="" value="" placeholder="Search..." />
			</div>
			<div class="column column-30">
				<div class="user-section"><a href="#">
					<img src="assets/img/find_user.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4>Admin</h4>
						<p>Administrator</p>
					</div>
				</a>&nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>Navigation</h5>
			<ul>
				<li><a href="#charts"><em class="fa fa-bar-chart"></em> Charts</a></li>
				<li><a href="#widgets"><em class="fa fa fa-clone"></em> Widgets</a></li>
				<li><a href="index1.php"><em class="fa fa-pencil-square-o"></em> Forms </a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<!--Charts-->
			<h5>Charts</h5><a class="anchor" name="charts"></a>
			<div class="row grid-responsive">
				<div class="column column-50">
					<div class="card">
						<div class="card-title">
							<h2>Line Chart</h2>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="column column-50">
					<div class="card">
						<div class="card-title">
							<h2>Bar Chart</h2>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row grid-responsive">
				<div class="column column-33">
					<div class="card">
						<div class="card-title">
							<h2>Pie Chart</h2>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="pie-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="column column-33">
					<div class="card">
						<div class="card-title">
							<h2>Radar Chart</h2>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="radar-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="column column-33">
					<div class="card">
						<div class="card-title">
							<h2>Polar Chart</h2>
						</div>
						<div class="card-block">
							<div class="canvas-wrapper">
								<canvas class="chart" id="polar-area-chart" height="auto" width="auto"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--Widgets-->
			<h5 class="mt-2">Widgets</h5><a class="anchor" name="widgets"></a>
			<div class="row grid-responsive mt-1">
				<div class="column">
					<div class="card">
						<div class="card-title">
							<h2 class="float-left">Notifications</h2>
							<div class="badge background-primary float-right">36</div>
							<div class="clearfix"></div>
						</div>
						<div class="card-block">
							<div class="mt-1">
								<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
								<div class="float-left ml-1">
									<p class="m-0"><strong>Jane Donovan</strong> <span class="text-muted">uploaded a new photo</span></p>
									<p class="text-small text-muted">30 minutes ago</p>
								</div>
								<div class="clearfix"></div>
								<hr class="m-0 mb-2" />
							</div>
							<div class="mt-1">
								<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
								<div class="float-left ml-1">
									<p class="m-0"><strong>Sam Davidson</strong> <span class="text-muted">just replied to your message</span></p>
									<p class="text-small text-muted">12 hours ago</p>
								</div>
								<div class="clearfix"></div>
								<hr class="m-0 mb-2" />
							</div>
							<div class="mt-1">
								<img src="http://via.placeholder.com/45x45" alt="profile photo" class="circle float-left profile-photo" width="45" height="auto">
								<div class="float-left ml-1">
									<p class="m-0"><strong>Kelly Johnson</strong> <span class="text-muted">changed her status</span></p>
									<p class="text-small text-muted">2 days ago</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="card-title">
							<h2 class="float-left">Projects</h2>
							<div class="badge float-right">3 In Progress</div>
							<!--<div class="badge background-success float-right mr-1">5 Complete</div>-->
							<div class="clearfix"></div>
						</div>
						<div class="card-block progress-bars">
							<h5 class="float-left mt-1">Project Title</h5>
							<p class="float-right text-small text-muted mt-1">25%</p>
							<div class="clearfix"></div>
							<div class="progress-bar">
								<div class="progress background-primary" style="width: 25%;"></div>
							</div>
							<h5 class="float-left mt-1">Project Title</h5>
							<p class="float-right text-small text-muted mt-1">50%</p>
							<div class="clearfix"></div>
							<div class="progress-bar">
								<div class="progress background-primary" style="width: 50%;"></div>
							</div>
							<h5 class="float-left mt-1">Project Title</h5>
							<p class="float-right text-small text-muted mt-1">75%</p>
							<div class="clearfix"></div>
							<div class="progress-bar">
								<div class="progress background-primary" style="width: 75%;"></div>
							</div>
							<h5 class="float-left mt-1">Project Title</h5>
							<p class="float-right text-small text-muted mt-1">100%</p>
							<div class="clearfix"></div>
							<div class="progress-bar">
								<div class="progress background-primary" style="width: 100%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--Forms-->
			
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>			

</body>
</html> 

<?php
    }else{
    header("location:login.php");
    }
?>