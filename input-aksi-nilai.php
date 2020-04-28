<?php 
include 'koneksi.php';

$kode_makul = $_POST['kode_makul'];
$nim = $_POST['nim'];
$nilai = $_POST['nilai'];

$sql = "INSERT INTO tbl_nilai SET kode_makul='$kode_makul', nim='$nim', nilai='$nilai'";
mysqli_query($koneksi, $sql);

header("location:index_nilai.php");
?>