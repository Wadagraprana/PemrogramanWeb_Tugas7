<html>
<head>
	<title>Tambahkan data</title>
</head>

<body>
<?php
require_once("config.php");

if (isset($_POST['submit'])) {
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);
		
	if (empty($nama) || empty($umur) || empty($email || empty($alamat))) {
		if (empty($nama)) {
			echo "<font color='red'>Nama tidak boleh kosong.</font><br/>";
		}
		
		if (empty($umur)) {
			echo "<font color='red'>Umur tidak boleh kosong.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email tidak boleh kosong.</font><br/>";
		}

		if (empty($alamat)) {
			echo "<font color='red'>Alamat tidak boleh kosong.</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
	} else {
		$result = mysqli_query($mysqli, "INSERT INTO users (nama, umur, email, alamat) VALUES ('$nama', $umur, '$email', '$alamat');");
		echo "<p color='green'>Data telah ditambahkan!</p>";
		echo "<a href='index.php'>Lihat hasil</a>";
	}
}
?>
</body>
</html>