<?php 
include('database_log.php');
$koneksi = new databaseLog();


$action = $_GET['action'];
if($action == "hapus"){ 	
 	$koneksi->hapus_log($_GET['id']);
	header("location:tampil_log.php");
 }
?>