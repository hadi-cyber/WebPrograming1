<?php 	
include('database.php');
$db = new database();
$data_admin = $db->tampil_data();
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
                                <a href="../../sistem/log_aktivity/tampil_log.php">Log Activity</a>
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
 <div id="page-inner"> 
               <a href="input.php" class="btn box-title">Tambah Data</a> 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>No</th>
			<th><center>Nama</center></th>
			<th><center>cDate</center></th>
			<th>Action</th>
		</thead>
		 <tbody>
		<?php 
		$no = 1;
		foreach($data_admin as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['cdate']?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>&action=edit"class="btn btn-primary">Update</a>
					<a href="proses.php?id=<?php echo $row['id']; ?>&action=hapus"class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
          </table>
	</table>
	</div><!-- /.box-body -->
      </div><!-- /. box -->
    </div><!-- /.col -->
</body>
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a href="../desain/input_desain.php" class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a href="tampil.php" class="btn-floating blue"><i class="material-icons dp48">supervisor_account</i></a></li>
    </ul>
  </div>
  <footer><p>Copyright Free Desain 2020 - All right reserved </p></footer>
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
     <!-- DATA TABLE SCRIPTS -->
    <script src="../../../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../../../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- Custom Js -->
    <script src="../../../assets/js/custom-scripts.js"></script>  
 

</body>

</html>
