<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<!-- <br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a> -->
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>prodi</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM tbl_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama_mhs']; ?></td>
				<td><?php echo $d['prodi']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_mhs']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_mhs']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br>

 
	<!-- <br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/> -->
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nim</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>prodi</td>
				<td><input type="text" name="prodi"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
    
</body>
</html>
