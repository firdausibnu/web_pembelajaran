<?php

error_reporting(0);
require_once "../../../connect/a_connect.php";

if (isset($_POST["submit-csv"])) {
    // echo 'hai';
   $excel = $_FILES['excel']['tmp_name'];
   if (is_file($excel)) {
       $input = fopen($excel, 'a+');
       // if the csv file contain the table header leave this line
       $row = fgetcsv($input, 1024, ','); // here you got the header
       while ($row = fgetcsv($input, 1024, ',')) {
           // insert into the database
           $sql = "INSERT INTO user(nim,password)values(:nim, :password);
               INSERT INTO mk_user(nim, kode_seksi)values(:nim, :kode_seksi);
               INSERT INTO profile(nim)values(:nim);
               ";
           $query = $db->prepare($sql);
           $query->bindParam(':nim', $row[0], PDO::PARAM_STR);
           $query->bindParam(':password', md5($row[1]), PDO::PARAM_STR);
           $query->bindParam(':kode_seksi', $row[2], PDO::PARAM_STR);
           $result = $query->execute();
       }
   }

    echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=user&l=1'; </script>";
}

if (isset($_POST["submit-user-manual"])) {
    if (isset($_POST['nim']) !== '' && isset($_POST['password']) !== '') {
        echo "<script> alert('Form Tidak Valid');window.location = '../../index.php?p=user&l=1'; </script>";
    } else {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $kode_seksi = $_POST["mata_kuliah"];
        $password = md5($_POST["password"]);

        $sql = "INSERT INTO user(nim,password)values(:nim, :password);
            INSERT INTO mk_user(nim, kode_seksi)values(:nim, :kode_seksi);
            INSERT INTO profile(nim, nama)values(:nim, :nama);
            ";

        $query = $db->prepare($sql);
        $query->bindParam(':nim', $nim);
        $query->bindParam(':nama', $nama);
        $query->bindParam(':password', md5($password));
        $query->bindParam(':kode_seksi', $kode_seksi);
        $result = $query->execute();

        echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=user&l=1'; </script>";
    }
}
?>