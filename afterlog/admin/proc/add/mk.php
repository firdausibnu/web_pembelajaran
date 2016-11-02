<?php

if(isset($_POST["submit"])){
  $kode_seksi = $_POST["kosek"];
  $nama_mk = $_POST["nama_mk"];
  $jenis_mk = $_POST["jenis_mk"];
  $teori = $_POST["sks_teori"];
  $praktek = $_POST["sks_praktek"];
  $total_sks = $_POST["total_sks"];

    $target_dir = "../../../../rpkps/";
    $target_file = $target_dir . basename($_FILES["rpkps"]["name"]);
    $uploadOk = 1;
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['rpkps']['tmp_name']);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["rpkps"]["tmp_name"]);

    echo $target_file;
    echo $imageFileType."</br>";
    echo $check."</br>";
  echo $mime;

}



?>
