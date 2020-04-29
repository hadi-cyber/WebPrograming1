<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

<h2 align="center">DATA MAHASISWA</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA MAHASISWA</h3>

<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($link, "select * from mahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
	?>
	<form method="post" action="update.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="nim" value="<?php echo $d['nim']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>" ></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
					<input type="text" name="program_studi" value="<?php echo $d['program_studi']; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<?php
}

 ?>
</body>
</html>