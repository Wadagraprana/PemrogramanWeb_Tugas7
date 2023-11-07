<?php
require_once("config.php");

if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	$alamat = mysqli_real_escape_string($mysqli, $_POST['alamat']);

	$existingRow_query = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
	$existingRow_data = mysqli_fetch_assoc($existingRow_query);
		if (empty($nama)) {
			$nama = $existingRow_data['nama'];
		}
		
		if (empty($umur)) {
			$umur = $existingRow_data['umur'];
		}
		
		if (empty($email)) {
			$email = $existingRow_data['email'];
		}

		if (empty($alamat)) {
			$alamat = $existingRow_data['alamat'];
		}
		$result = mysqli_query($mysqli, "UPDATE users SET `nama` = '$nama', `umur` = '$umur', `email` = '$email', `alamat` = '$alamat' WHERE `id` = $id");
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
}