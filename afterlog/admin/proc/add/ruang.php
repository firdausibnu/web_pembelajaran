<?php
	require_once "../../../connect/a_connect.php";

	$kode_ruang = $_POST['kode_ruang'];
	$deskripsi = $_POST['deskripsi'];
	

	$save = $db->prepare("INSERT into ref_ruang(`kode_ruang`,`deskripsi`) values('".$kode_ruang."','".$deskripsi."')");
	$save->execute();

	echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=ruang&l=1'; </script>";
?>