<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$prodi = $_POST['prodi'];
 
// menginput data ke database
mysqli_query($conect,"INSERT INTO tbl_mahasiswa VALUES('','$nim','$nama_mhs','$prodi')");
 
// mengalihkan halaman kembali ke index.php
header("location:UTS.php");
 
?>