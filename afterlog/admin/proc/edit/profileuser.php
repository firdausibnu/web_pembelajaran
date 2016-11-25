<?php
	require_once "../../../connect/a_connect.php";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$update_foto = '';
	if($_FILES['foto']['tmp_name']!=""){
		$tmp_foto = $_FILES['foto']['tmp_name'];
		$foto = $_FILES['foto']['name'];
		move_uploaded_file($tmp_foto, "../../../../foto_profile/".$foto);
		$update_foto = ",`foto`='".$foto."'";
	}

	$update = $db->prepare("UPDATE profile set 
									`nama`='".$nama."',
									`email`='".$email."'
									".$update_foto." 
									WHERE nim = '".$nim."'");
	$update->execute();

	echo "<script> alert('Data Berhasil Di Ubah');window.location = '../../../index.php'; </script>";
?>