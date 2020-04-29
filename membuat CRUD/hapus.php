<?php 
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($link,"DELETE from mahasiswa where id='$id'");

header("Location:index.php");
 ?>