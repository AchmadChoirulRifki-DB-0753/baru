<?php 
include "koneksi.php";

$kode_makul = $_POST['kode_makul'];
$nim = $_POST['nim'];
$nilai = $_POST['nilai'];

$sql = 'UPDATE tbl_nilai SET nim="'.$nim.'", nilai="'.$nilai.'" where kode_makul="'.$kode_makul.'"';
$query = mysqli_query($koneksi,$sql);

header("location:index_nilai.php");

?>