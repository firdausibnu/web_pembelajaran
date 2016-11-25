<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

error_reporting(1);

if (isset($_GET['d'])) {
    $kode_ruang = $_GET['d'];

    $sql = "delete from ref_ruang where kode_ruang = $kode_ruang";
    $stmt = $db->prepare($sql);
    if ($stmt->execute()) {
        echo "<script> alert('Data Berhasil Di Hapus');window.location = '../../index.php?p=ruang&l=1'; </script>";
    }
}