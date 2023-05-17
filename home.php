<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>nim</th>
			<th>nama_mhs</th>
			<th>prodi</th>

		</tr>
		<?php 
		include 'conect.php';
		$no = 1;
		$data = mysqli_query($conect,"SELECT * FROM tbl_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
				<td>
					<a href="mengubah.php?id=<?php echo $d['id_mhs']; ?>">EDIT</a>
					<a href="deleted.php?id=<?php echo $d['id_mhs']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br>

 
	
	
</body>
</html>
