<?php
	require_once "../../../connect/a_connect.php";

	$id = $_POST['id'];
	$kode_ruang = $_POST['kode_ruang'];
	$deskripsi = $_POST['deskripsi'];
	

	$update = $db->prepare("UPDATE ref_ruang set 
									`kode_ruang`='".$kode_ruang."',
									`deskripsi`='".$deskripsi."'
									WHERE id = '".$id."'");
	$update->execute();

	echo "<script> alert('Data Berhasil Di Ubah');window.location = '../../index.php?p=ruang&l=1'; </script>";
?>