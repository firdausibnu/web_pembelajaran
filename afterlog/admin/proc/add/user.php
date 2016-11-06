<?php

error_reporting(0);
require_once "../../../connect/a_connect.php";


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

// redirect to the index pageecho "<script> alert('" . $message . "');";
echo "<script> alert('Data Berhasil Di Tambahkan');window.location = '../../index.php?p=user&l=1'; </script>";
?>