<?php
	session_start();
	include "../connect/a_connect.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * from user where nim='$username' and password='$password'";
	$stmt = $db->prepare($sql);
  $stmt->execute();

	$numrows = $stmt -> rowCount();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if($numrows==TRUE){
		if($result['role']== '2'){
			$sql2 = "SELECT * from profile where nim=:nim";
			$stmt2 = $db->prepare($sql2);
			$stmt2->bindValue(':nim', $result['nim']);
		  $stmt2->execute();

			$result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
			$_SESSION['nim']=$result['nim'];
			$_SESSION['role']=$result['role'];
			$_SESSION['nama']=$result2['nama'];
			$_SESSION['email']=$result2['email'];
			header("Location: ../admin/index.php");
		}
	}
	else{
             echo '<script>alert("username atau password salah, silahkan login kembali");window.location.replace("../../index.html");</script>';
	//	header("Location: ../../index.php");
	}
?>
