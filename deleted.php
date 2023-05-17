<?php 
// koneksi database
include 'conect.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conect,"DELETE FROM tbl_mahasiswa WHERE id_mhs ='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:UTS.php");
 