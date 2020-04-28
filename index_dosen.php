<?php
include ("koneksi.php");
?>

<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs2.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<font color="black"><h2 align="center" >Data Dosen</h2></font>
	<br>
	<table border="1px" align="center" bgcolor="white">
		<tr align="center" bgcolor="skyblue">
			<th>No.</th>
			<th>Kode Dosen</th>
			<th>Nama Dosen</th>
			<th>Aksi</th>
		</tr>
	<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM dosen");
		$no = 1;
		while ($tampil =mysqli_fetch_array($sql)){
			?>
		<tr bgcolor="yellow">
			<td><?php echo $no;?>					   </td>
			<td><?php echo $tampil['kode_dosen'];?>		</td>
			<td><?php echo $tampil['nama_dosen'];?>		</td>
			<td>
				<a href="edit_dosen.php?kode_dosen=<?php echo $tampil['kode_dosen']; ?>"><img src="edit.png" width="20px" height="20px"/></a>
				<a href="delete_dosen.php?kode_dosen=<?php echo $tampil['kode_dosen']; ?>"><img src="hapus.png" width="20px" height="20px"/></a>
			</td>
		</tr>
	<?php
		$no++;
			}
	?>
	</table>
	<br>
	<div align="center">
	<a href="input_dosen.php" ><input type="submit" class="tombol_login" value="INPUT DATA DOSEN">
	<a href="logout.php" ><input type="submit" class="tombol_login" value="LOGOUT">
</body>
</html>