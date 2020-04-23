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
                <a href="index1.php">Go to Home</a>
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
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $judul_desain=$_POST['judul_desain'];
    $editor=$_POST['editor'];
    $link_download=$_POST['link_download'];
    $deskripsi=$_POST['deskripsi'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE data_desain SET judul_desain='$judul_desain',editor='$editor',link_download='$link_download',deskripsi='$deskripsi' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index1.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_desain WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $judul_desain = $user_data['judul_desain'];
    $editor = $user_data['editor'];
    $link_download = $user_data['link_download'];
    $deskripsi = $user_data['deskripsi'];
}
?>
<html>
<head>  
    <title>Edit Data Desain</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Judul Desain</td>
                <td><input type="text" name="judul_desain" value=<?php echo $judul_desain;?>></td>
            </tr>
            <tr> 
                <td>Editor</td>
                <td><input type="text" name="editor" value=<?php echo $editor;?>></td>
            </tr>
            <tr> 
                <td>Link Download</td>
                <td><input type="text" name="link_download" value=<?php echo $link_download;?>></td>
            </tr>
             <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>