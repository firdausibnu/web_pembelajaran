<?php
	require_once "../../../connect/a_connect.php";

	$id = $_POST['id'];
	$kode_seksi = $_POST['kode_seksi'];
	$tempat = $_POST['tempat'];
	$waktu_mulai = $_POST['waktu_mulai'];
	$waktu_selesai = $_POST['waktu_selesai'];

	$update = $db->prepare("UPDATE jadwal_kuliah set 
									`kode_seksi`='".$kode_seksi."',
									`tempat`='".$tempat."',
									`waktu_mulai`='".$waktu_mulai."',
									`waktu_selesai`='".$waktu_selesai."'
									WHERE id = '".$id."'");
	$update->execute();

	echo "<script> alert('Data Berhasil Di Ubah');window.location = '../../index.php?p=jadwal&l=1'; </script>";
?>