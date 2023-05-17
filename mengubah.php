<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'conect.php';
	$id_mhs = $_GET['id'];
	$data = mysqli_query($conect,"SELECT * FROM tbl_mahasiswa WHERE id_mhs='$id_mhs'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="POST" action="ubah.php">
			<table>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="hidden" name="id_mhs" value="<?php echo $d['id_mhs']; ?>">
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td>NAMA MAHASISWA</td>
					<td><input type="text" name="nama_mhs" value="<?php echo $d['nama_mhs']; ?>"></td>
				</tr>
                <tr>
					<td>Prodi</td>
					<td><input type="text" name="prodi" value="<?php echo $d['prodi']; ?>"></td>
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