<!DOCTYPE html>
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
                        <a class="active-menu waves-effect waves-dark" href="../../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-table"></i>Kelola Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../admin/tampil.php">Data Admin</a>
                            </li>
                            <li>
                                <a href="tampil_desain.php">Data Desain</a>
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
                            Data Desain
                        </h1>
                        <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Kelola Data</a></li>
                      <li class="active">Data Desain</li>
                    </ol>
					  <!--/. NAV TOP  -->
<body>
	<div id="page-inner"> 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-content">
<form method="post" action="proses_desain.php?action=add">
<table>
	<div class="box-body">
		<form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <h5>Nama Desain</h5>
          <input placeholder="Nama Desain" type="text" name="nama_desain"/>
        </div>
        <div class="input-field col s6">
          <h5>Editor</h5>
          <input placeholder="Editor" type="text" name="editor"/>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <h5>Deskripsi</h5>
          <textarea placeholder="Deskripsi" name="deskripsi" cols="50" rows="10" class="form-control"></textarea>
        </div>
        <div class="input-field col s6">
          <h5>Link Download</h5>
          <input placeholder="Link" type="text" name="link_download"/>
        </div>
        <div class="col-md-4">
                    <script type="text/javascript">
                    function PreviewImagesp1() {
                      var oFReader = new FileReader();
                      oFReader.readAsDataURL(document.getElementById("uploadImagesp1").files[0]);
                      oFReader.onload = function (oFREvent)
                      {
                        document.getElementById("uploadPreviewsp1").src = oFREvent.target.result;
                      };
                    };
                    </script>
                    <input id="uploadImagesp1" type="file" name="foto" value="Pilih" onchange="PreviewImagesp1();" required=""/>
                  </div><!-- /.col -->
      </div>
    </form>
	<div class="box-footer">
              <div class="pull-right">
                <button type="submit" name="tombol" value="Simpan" class="btn btn-primary">Submit <i class="fa fa-upload"></i></button>
              </div>
            </div><!-- /.box-footer -->
 <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a href="input_desain.php" class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a href="../admin/tampil.php" class="btn-floating blue"><i class="material-icons dp48">supervisor_account</i></a></li>
    </ul>
  </div>
  <footer><p>Copyright Free Desain 2020 - All right reserved </p></footer>

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