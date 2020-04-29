<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$program_studi = $_POST['program_studi'];

mysqli_query($link,"UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', program_studi='$program_studi' WHERE id='$id'");

    header("Location: index.php");

 ?>