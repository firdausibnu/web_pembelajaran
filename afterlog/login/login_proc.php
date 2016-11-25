<?php
    session_start();
    include "../connect/a_connect.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $kode_seksi = $_POST['kode_seksi'];

    $check1 = $db->prepare("SELECT * from mk_user where nim='$username' and kode_seksi='$kode_seksi'");
    $check1->execute();
    $result1 = $check1->fetchAll();

    if (!empty($result1)) {
        $check2 = $db->prepare("SELECT * from user where nim='$username' and password='$password'");
        $check2->execute();
        $result2 = $check2->fetchAll();

            if (!empty($result2)){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['kode_seksi'] = $kode_seksi;
                header("location:../index.php");

    }else{
            echo '<script>alert("Username atau password salah");window.location.replace("../../index.php");</script>';
        }

    }else{
        echo '<script>alert("Anda tidak terdaftar");window.location.replace("../../index.php");</script>';
    }
?>