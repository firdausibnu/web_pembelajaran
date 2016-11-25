<?php
	require_once "../../../connect/a_connect.php";

	$id = $_POST['id'];
	$kode_seksi = $_POST['kode_seksi'];
	$kode_ujian = $_POST['kode_ujian'];
	$tanggal_ujian = $_POST['tanggal_ujian'];

	$update = $db->prepare("UPDATE jadwal_ujian set 
									`kode_seksi`='".$kode_seksi."',
									`kode_ujian`='".$kode_ujian."',
									`tanggal_ujian`='".$tanggal_ujian."'
									WHERE id = '".$id."'");
	$update->execute();

	echo "<script> alert('Data Berhasil Di Ubah');window.location = '../../index.php?p=jadwal&l=2'; </script>";
?>