<html>
<head>
	<title>Memasukkan Data</title>
</head>

<body>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Umur</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>