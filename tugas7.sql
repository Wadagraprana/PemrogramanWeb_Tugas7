--buat database
CREATE DATABASE tugas7_pweb_aldo;

--buat tabel
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `regist_date` date,
  PRIMARY KEY  (`id`)
);

--tanggal Otomatis
CREATE TRIGGER tanggal_otomatis
BEFORE INSERT ON users
FOR EACH ROW
SET new.regist_date = CURRENT_DATE;