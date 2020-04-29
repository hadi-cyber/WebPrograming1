<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

<h2 align="center">DATA MAHASISWA</h2>
<br/>
<a href="tambah.php">+ TAMBAH MAHASISWA</a>
<br/>
<br/>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Program Studi</th>
		<th>OPSI</th>
	</tr>
	<?php 
	include'koneksi.php';
	$no = 1;
	$data = mysqli_query($link, "select * from mahasiswa");
	while ($d = mysqli_fetch_array($data)) {
	 ?>
	 <tr>
	 	<td><?php echo $no++; ?></td>
	 	<td><?php echo $d['nim']; ?></td>
	 	<td><?php echo $d['nama']; ?></td>
	 	<td><?php echo $d['alamat']; ?></td>
	 	<td><?php echo $d['program_studi']; ?></td>
	 	<td>
	 		<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
	 		<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
	 	</td>
	 </tr>
	 <?php 
	 } 
	 ?>
</table>
</body>
</html>