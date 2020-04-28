<?php
include ("koneksi.php");
?>

<html>
<head>
	<title>Data Nilai Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body { 
		background-image: url(bs3.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<h2 align="center">Data Nilai Mahasiswa</h2>
	<br>
	<table border="1px" align="center">
		<tr align="center" bgcolor="skyblue">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kode Makul</th>
			<th>Nama Kuliah</th>
			<th>SKS</th>
			<th>Dosen Pengampu</th>
			<th>Nilai</th>
			<th>Aksi</th>
		</tr>
	<?php
		$sql = mysqli_query($koneksi, "select * from tbl_nilai join mahasiswa on tbl_nilai.nim=mahasiswa.nim join kuliah on tbl_nilai.kode_makul=kuliah.kode_makul join dosen on kuliah.kode_dosen=dosen.kode_dosen");
		$no = 1;
		while ($tampil =mysqli_fetch_array($sql)){
			?>
		<tr bgcolor="yellow">
			<td><?php echo $no;?>				    </td>
			<td><?php echo $tampil['nim'];?>		</td>
			<td><?php echo $tampil['nama'];?>       </td>
			<td><?php echo $tampil['kode_makul'];?> </td>
			<td><?php echo $tampil['nama_makul'];?> </td>
			<td><?php echo $tampil['sks'];?>       </td>
			<td><?php echo $tampil['nama_dosen'];?>       </td>
			<td><?php echo $tampil['nilai'];?>		</td>
			<td>
				<a href="edit_nilai.php?kode_makul=<?php echo $tampil['kode_makul']; ?>"><img src="edit.png" width="20px" height="20px"/></a>
				<a href="delete_nilai.php?kode_makul=<?php echo $tampil['kode_makul']; ?>"><img src="hapus.png" width="20px" height="20px"/></a>
			</td>
		</tr>
	<?php
		$no++;
			}
	?>
	</table>
	<br>
	<div align="center">
	<a href="input_nilai.php" ><input type="submit" class="tombol_login" value="INPUT DATA NILAI">
	<a href="logout.php" ><input type="submit" class="tombol_login" value="LOGOUT">
</body>
</html>