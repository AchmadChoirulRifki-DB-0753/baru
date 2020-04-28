<!DOCTYPE html>
<html>
<head>
	<title>Input Data Nilai Baru</title>
	<link rel="stylesheet" href="./style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs3.jpg);
		background-size: 100%; 
		}
</style>
	<div align="center">
	<br/>
	<a href="index_nilai.php">Lihat Data</a>
	<br/>
	<h3>Input Data Baru</h3>
	<form method="post" action="input-aksi-nilai.php">
		<div class="table-users">	
		<table>
			<tr>
				<td>Kode Makul :</td>
				<td><input type="text" name="kode_makul" placeholder="Masukkan Kode"></td>					
			</tr>	
			<tr>
				<td>NIM :</td>
				<td><input type="text" name="nim" placeholder="Masukkan NIM"></td>					
			</tr>
			<tr>
				<td>Nilai :</td>
				<td><input type="number" name="nilai" placeholder="Masukkan nilai"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah">
				</td>					
			</tr>				
		</table>
	</div>
	</form>
</body>
</html>