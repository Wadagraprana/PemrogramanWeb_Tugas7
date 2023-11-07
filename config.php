<?php
$dbHost = 'localhost';
$dbNama = 'tugas7_pweb_aldo';
$dbUser = 'root';
$dbPW = '';

$mysqli = mysqli_connect($dbHost, $dbUser,$dbPW,$dbNama);

if( !$mysqli ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>