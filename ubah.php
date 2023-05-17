<?php 
// koneksi database
include 'conect.php';
 
// menangkap data yang di kirim dari form
$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$prodi = $_POST['prodi'];
 
// update data ke database
mysqli_query($conect," UPDATE tbl_mahasiswa SET nim ='$nim' , nama_mhs='$nama_mhs' , prodi='$prodi'  WHERE id_mhs='$id_mhs'");
 
// mengalihkan halaman kembali ke index.php
header("location:UTS.php");
 
?>