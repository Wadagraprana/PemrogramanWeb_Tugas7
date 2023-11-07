<?php
require_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");
$res = mysqli_fetch_assoc($result);

$nama = $res['nama'];
$umur = $res['umur'];
$email = $res['email'];
$alamat = $res['alamat'];
?>

<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr> 
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $umur; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update" onClick="return confirm('Yakin untuk melakukan update?')"></td>
			</tr>
		</table>
	</form>
</body>
</html>