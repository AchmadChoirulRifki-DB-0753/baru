<?php 
include'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body { 
		background-image: url(bs4.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<title>Edit Data Nilai</title>
	<link rel="stylesheet" href="./style.css">
</head>
<div align="center">
    <h2 align="center">Edit Data</h2>

	<?php
	$kode_makul = $_GET['kode_makul'];
	$sql = mysqli_query($koneksi,"select * from tbl_nilai where kode_makul='$kode_makul'");
	while($tampil = mysqli_fetch_array($sql)){
		?>

		<form method="post" action="edit-aksi-nilai.php">
			<div class="table-users">
			<table align="center" style="padding-bottom: 5px">
				<tr>			
					<td>Kode Makul :</td>
					<td>:</td>
					<td>
						<input type="text" name="kode_makul" value="<?php echo $tampil['kode_makul']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM :</td>
					<td>:</td>
					<td><input type="number" name="nim" value="<?php echo $tampil['nim']; ?>"></td>	
				</tr>
				<tr>
					<td>Nilai :</td>
					<td>:</td>
					<td><input type="number" name="nilai" value="<?php echo $tampil['nilai']; ?>"></td>	
				</tr>
			</table>
		</div>
			<center>
				<button style="align-content: center;" >Ubah Data</button>
				<a href="index_nilai.php" ><button style="align-content: center;">Keluar</button></a>
			</center>
		</form>
	<?php 
	}
	?>
	</div>
</body>
</html>