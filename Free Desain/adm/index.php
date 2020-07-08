<?php
    ob_start();
    session_start();
    error_reporting();

    include_once "koneksi.php";
    if ($_SESSION['admin'] || $_SESSION['user']){
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.php"><i class="large material-icons">track_changes</i> <strong>Free Desain</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 

				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Admin</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>

<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./data/kelola/admin/tampil.php">Data Admin</a>
                            </li>
                            <li>
                                <a href="./data/kelola/desain/tampil_desain.php">Data Desain</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>System<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./data/sistem/log_aktivity/tampil_log.php">Log Activity</a>
                            </li>
                            <li>
                                <a href="#">Trash Desain</a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			<div class="dashboard-cards"> 
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image red">
						<i class="material-icons dp48">import_export</i>
						</div>
						<div class="card-stacked red">
						<div class="card-content">
                        <?php
                        require "./data/sistem/log_aktivity/database_log.php";
                        $data_log= mysqli_query($koneksi,"SELECT * FROM log_aktivity");
                        // menghitung data barang
                        $jumlah_log = mysqli_num_rows($data_log);
                        ?>
						<h3 align="center"><?php echo $jumlah_log; ?></h3>  
						</div>
						<div class="card-action">
						<strong>Activity</strong>
						</div>
						</div>
						</div>
	 
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
					
							<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image blue">
						<i class="material-icons dp48">equalizer</i>
						</div>
						<div class="card-stacked blue">
						<div class="card-content">
                        <?php
                        require "./data/kelola/desain/database_desain.php";
                        $data_desain = mysqli_query($koneksi,"SELECT * FROM data_desain");
                        // menghitung data barang
                        $jumlah_desain = mysqli_num_rows($data_desain);
                        ?>
						<h3 align="center"><?php echo $jumlah_desain; ?></h3> 
						</div>
						<div class="card-action">
						<strong >Desain</strong>
						</div>
						</div>
						</div> 
						 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image green">
						<i class="material-icons dp48">supervisor_account</i>
						</div>
						<div class="card-stacked green">
						<div class="card-content">
						<?php
              			require "./data/kelola/admin/database.php";
             			$data_admin = mysqli_query($koneksi,"SELECT * FROM admin");
             			// menghitung data barang
             			$jumlah_admin = mysqli_num_rows($data_admin);
             			?>
                        <h3 align="center"><?php echo $jumlah_admin; ?></h3>
						</div>
						<div class="card-action">
						<strong><center>ADMIN </center></strong>
						</div>
						</div>
						</div> 
						 
                    </div>
                </div>
			   </div>

                <!-- /. ROW  -->
			   <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a href="./data/kelola/desain/input_desain.php" class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a href="./data/kelola/admin/tampil.php" class="btn-floating blue"><i class="material-icons dp48">supervisor_account</i></a></li>
    </ul>
  </div>
				<footer><p>Copyright Free Desain 2020 - All right reserved </p></footer>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>
<?php
    }else{
    header("location:login.php");
    }
?>