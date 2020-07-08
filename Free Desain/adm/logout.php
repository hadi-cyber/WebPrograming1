<?php
session_start();
session_destroy();
require "./data/sistem/log_aktivity/database_log.php";
$log = new databaseLog();
header("location:login.php");
$log->tambah_dataLog($_POST['keterangan']);
?>