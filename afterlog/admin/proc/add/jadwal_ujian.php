<?php
	require_once "../../../connect/a_connect.php";

	$kode_seksi = $_POST['kode_seksi'];
	$kode_ujian = $_POST['kode_ujian'];
	$tanggal_ujian = $_POST['tanggal_ujian'];
	

	$save = $db->prepare("INSERT into jadwal_ujian(`kode_seksi`,`kode_ujian`,`tanggal_ujian`) values('".$kode_seksi."','".$kode_ujian."','".$tanggal_ujian."')");
	$save->execute();

	echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=jadwal&l=2'; </script>";
?>