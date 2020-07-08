<?php 
include('database_desain.php');
$koneksi = new database_desain();
require "../../sistem/log_aktivity/database_log.php";
$log = new databaseLog();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_dataDesain($_POST['nama_desain'],$_POST['editor'],$_POST['link_download'],$_POST['deskripsi'],$_POST['foto']);
	header('location:tampil_desain.php');
}elseif($action == "hapus"){ 	
 	$koneksi->hapus_desain($_GET['id']);
	header("location:tampil_desain.php");
	$log->tambah_dataLog($_POST['keterangan']);
 }elseif($action=="ubah_dataDesain")
{
	$koneksi->ubah_dataDesain($_POST['id'],$_POST['nama_desain'],$_POST['editor'],$_POST['link_download'],
		$_POST['deskripsi'],$_POST['foto']);
	$log->tambah_dataLog($_POST['keterangan']);
	header('location:tampil_desain.php');
}
?>