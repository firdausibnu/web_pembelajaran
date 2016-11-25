<?php
	require_once "../../../connect/a_connect.php";

	$kode_seksi = $_POST['kode_seksi'];
	$tempat = $_POST['tempat'];
	$waktu_mulai = $_POST['waktu_mulai'];
	$waktu_selesai = $_POST['waktu_selesai'];
	

	$save = $db->prepare("INSERT into jadwal_kuliah(`kode_seksi`,`tempat`,`waktu_mulai`,`waktu_selesai`) values('".$kode_seksi."','".$tempat."','".$waktu_mulai."','".$waktu_selesai."')");
	$save->execute();

	echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=jadwal&l=1'; </script>";
?>