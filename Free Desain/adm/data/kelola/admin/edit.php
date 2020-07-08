<?php 	
include('database.php');
$db = new database();
$id = $_GET['id'];
if(! is_null($id))
{
	$data_admin = $db->get_by_id($id);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../../../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../../../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../../../assets/js/Lightweight-Chart/cssCharts.css"> 
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
                <a class="navbar-brand waves-effect waves-dark" href="../../../index.php"><i class="large material-icons">track_changes</i> <strong>Free Desain</strong></a>
                
        <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 

                  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Admin</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="../../../profile.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>

<li><a href="../../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

       <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="../../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="tampil.php">Data Admin</a>
                            </li>
                            <li>
                                <a href="../desain/tampil_desain.php">Data Desain</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>System<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Log Activity</a>
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
                            Data Admin
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Kelola Data</a></li>
                      <li class="active">Data Admin</li>
                    </ol>  
<body>
	<div class="card">
    <div class="col-md-10">
      <div class="box box-primary">
      	 <div class="form-group">
        <div class="box-header with-border">
          <i class="fa fa-newspaper-o"></i>
<hr/>
<hr/>
<form method="post" action="proses.php?action=ubah_data">
<input type="hidden" name="id" value="<?php echo $data_admin['id']; ?>"/>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data_admin['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $data_admin['username']; ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php echo $data_admin['password']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="ubah_data"/></td>
	</tr>
</table>
</form>
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a href="../desain/input_desain.php" class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a href="tampil.php" class="btn-floating blue"><i class="material-icons dp48">supervisor_account</i></a></li>
    </ul>
  </div>
</table>
</div>
</div>
</div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../../assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
    
    <script src="../../../assets/materialize/js/materialize.min.js"></script>
    
    <!-- Metis Menu Js -->
    <script src="../../../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../../../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../../assets/js/morris/morris.js"></script>
    
    
    <script src="../../../assets/js/easypiechart.js"></script>
    <script src="../../../assets/js/easypiechart-data.js"></script>
    
     <script src="../../../assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="../../../assets/js/custom-scripts.js"></script> 
 

</body>
</html>