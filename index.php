<?php
require_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<html>
<head>	
	<title>tugas7_pweb_aldo</title>
</head>

<body>
	<p>
		<a href="add.php">Tambah baris baru</a>
	</p>
	<table width='70%' border=2>
		<tr bgcolor='yellow'>
			<td><strong>Nama</strong></td>
			<td><strong>Umur</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Alamat</strong></td>
			<td><strong>Tanggal Resgistrasi</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr bgcolor='whitesmoke'>";
			echo "<td>".$res['nama']."</td>";
			echo "<td>".$res['umur']."</td>";
			echo "<td>".$res['email']."</td>";	
			echo "<td>".$res['alamat']."</td>";	
			echo "<td>".$res['regist_date']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Yakin untuk menghapus secara permanen?')\">Hapus</a></td>";
		}
		?>
	</table>
</body>
</html>