<?php
require_once "../../../connect/a_connect.php";


if(isset($_POST["submit"])){
  // print_r($_POST);
  // return;
  $kode_seksi = $_POST["kode_seksi"];
  $nama_mk = $_POST["nama_mk"];
  $jenis_mk = $_POST["jenis_mk"];
  $teori_sks = $_POST["teori_sks"];
  $praktek_sks = $_POST["praktek_sks"];
  $total_sks = $_POST["total_sks"];
  $update_cover_img = '';
  $update_rpkps = '';

    

    if($_FILES['rpkps']['tmp_name']!=""){

              $tmp_rpkps = $_FILES['rpkps']['tmp_name'];
              $rpkps = $_FILES['rpkps']['name'];
              move_uploaded_file($tmp_rpkps, "../../../../rpkps/" . $rpkps);
              $update_rpkps = ",`rpkps`='".$rpkps."'";

            }

            if($_FILES['cover_img']['tmp_name']!=""){

              $tmp_cover_img = $_FILES['cover_img']['tmp_name'];
              $cover_img = $_FILES['cover_img']['name'];
              move_uploaded_file($tmp_cover_img, "../../../../cover_img/" . $cover_img);
              $update_cover_img = ",`cover_img`='".$cover_img."'";

            }

        $update = $db->prepare("UPDATE mata_kuliah set 
         'kode_seksi' = '" . $kode_seksi . "',
         'nama_mk' = '" . $nama_mk . "', 
         'jenis_mk' = '" . $jenis_mk . "', 
         'teori_sks' = '" . $teori_sks . "',
         'praktek_sks' = '" . $praktek_sks . "', 
         'total_sks' '" . $total_sks. "',
          " . $update_rpkps. ",
          " . $update_cover_img . " 
         WHERE kode_seksi = '" . $kode_seksi . "'");    

        $update->execute();

        echo "<script> alert('Data Berhasil Di Ubah');window.location = '../../index.php?p=mk&l=1'; </script>";

    }

?>
