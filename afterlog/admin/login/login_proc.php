<?php
    session_start();
    include "../../connect/a_connect.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $check1 = $db->prepare("SELECT * from user where nim='$username' and password='$password'");
    $check1->execute();
    $result1 = $check1->fetchAll();

    if (!empty($result1)) {

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:../index.php");

    }else{
        echo '<script>alert("Username atau password salah");window.location.replace("../../index.php");</script>';
    }
?>