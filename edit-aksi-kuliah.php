<?php 
include 'koneksi.php';

$kode_makul = $_POST['kode_makul'];
$nama_makul = $_POST['nama_makul'];
$sks = $_POST['sks'];
$kode_dosen = $_POST['kode_dosen'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];

$sql	= 'UPDATE kuliah SET nama_makul="'.$nama_makul.'", sks="'.$sks.'", kode_dosen="'.$kode_dosen.'", ruang="'.$ruang.'", waktu="'.$waktu.'" where kode_makul="'.$kode_makul.'"';
$query	= mysqli_query($koneksi,$sql);

header("location:index_kuliah.php");

?>