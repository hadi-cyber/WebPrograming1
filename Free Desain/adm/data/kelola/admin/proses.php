<?php 
include('database.php');
$koneksi = new database();
require "../../sistem/log_aktivity/database_log.php";
$log = new databaseLog();


$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama'],$_POST['username'],$_POST['password']);
	$log->tambah_dataLog($_POST['keterangan']);
	header('location:tampil.php');
}elseif($action == "hapus_log"){ 	
 	$koneksi->hapus($_GET['id']);
 	$log->tambah_dataLog($_POST['keterangan']);
	header("location:tampil.php");
 }elseif($action=="ubah_data")
{
	$koneksi->ubah_data($_POST['id'],$_POST['nama'],$_POST['username'],$_POST['password']);
	$log->tambah_dataLog($_POST['keterangan']);
	header('location:tampil.php');
}
?>