<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Halaman Add Data</title>
    
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
            <div class="column column-30 col-site-title"><a href="?projek_uts=home.php" class="site-title float-left">Web Desain</a>
            <a href="index1.php">Go to Home</a></div>
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
    <br><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Judul Desain</td>
                <td><input type="text" name="judul_desain"></td>
            </tr>
            <tr> 
                <td>Editor</td>
                <td><input type="text" name="editor"></td>
            </tr>
            <tr> 
                <td>Link Downlaod</td>
                <td><input type="text" name="link_download"></td>
            </tr>
             <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $judul_desain = $_POST['judul_desain'];
        $editor = $_POST['editor'];
        $link_download = $_POST['link_download'];
        $deskripsi = $_POST['deskripsi'];
        // include database connection file
        include_once("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO data_desain (judul_desain,editor,link_download,deskripsi) VALUES('$judul_desain','$editor',' $link_download','$deskripsi')");
        // Show message when user added
        echo "Data added successfully. <a href='index1.php'>View Users</a>";
    }
    ?>
</html>