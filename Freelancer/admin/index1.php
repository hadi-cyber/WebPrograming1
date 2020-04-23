<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Halaman Edit Data</title>
    
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
                <a href="index.php">Go to Home</a>
            </div>
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

<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM data_desain ORDER BY id DESC");
?>
<html>
<head>    
    <title>Data Desain</title>
</head>
<body>
<a href="index.php">Back</a><br/><br/>
<a href="add.php">Add New Data</a><br/><br/>
    <table width='80%' border=1>

    <tr>
        <th>Judul Desain</th> <th>Editor</th> <th>Link Download</th> <th>Deskripsi</th><th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['judul_desain']."</td>";
        echo "<td>".$user_data['editor']."</td>";
        echo "<td>".$user_data['link_download']."</td>"; 
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>