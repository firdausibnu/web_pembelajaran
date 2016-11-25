<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET['d'])) {
    $id = $_GET['d'];

    $sql = "delete from jadwal_kuliah where id = $id";
    $stmt = $db->prepare($sql);
    if ($stmt->execute()) {
        echo "<script> alert('Data Berhasil Di Hapus');window.location = '../../index.php?p=jadwal&l=1'; </script>";
    }
}