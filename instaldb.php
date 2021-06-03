<?php
$koneksi=new mysqli("localhost","root","");
$sql="create database sales";
$q=$koneksi->query($sql);
if ($q)  {
	echo "database sudah dibuat !";
} else {
	echo "database gagal dibuat !";
}
$sql2="
CREATE TABLE sales.`barang` (
  `nomor mesin kendaraan` varchar(30) NOT NULL,
  `nomor rangka kendaraan` varchar(50) NOT NULL,
  `jenis kendaraan` varchar(50) NOT NULL,
  `nama kendaraan` varchar(30) NOT NULL,
  `tanggal buat` date NOT NULL,
  `catatan kondisi kendaraan` varchar(30) NOT NULL,
  `nomor BPKB` varchar(30) NOT NULL,
  `nomor STNK` varchar(30) NOT NULL,
  `status STNK` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q2=$koneksi->query($sql2);
if ($q2)  {
	echo "tabel barang sudah dibuat !";
} else {
	echo "tabel barang gagal dibuat !";
}