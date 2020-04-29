<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$program_studi = $_POST['program_studi'];


mysqli_query($link, "INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','$program_studi')");

header("location:index.php");

 ?>