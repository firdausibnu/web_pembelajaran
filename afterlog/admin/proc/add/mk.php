<?php
require_once "../../../connect/a_connect.php";


if(isset($_POST["submit"])){
  $kode_seksi = $_POST["kosek"];
  $nama_mk = $_POST["nama_mk"];
  $jenis_mk = $_POST["jenis_mk"];
  $teori = $_POST["sks_teori"];
  $praktek = $_POST["sks_praktek"];
  $total_sks = $_POST["total_sks"];

    

    if(!empty($_FILES["rpkps"])){

      $allowed_ext = array('docx','doc');
      
      $file_name_rpkps = $_FILES['rpkps']['name']; //get nama file dari form
      $file_tmp_rpkps = $_FILES['rpkps']['tmp_name']; //set nama file yang akan disimpan ke direktori

      $value = explode(".", $file_name_rpkps);
      $file_ext_rpkps = end($value);
       
      
      // $value = explode(".", $file_name_rpkps);
      // $file_ext_rpkps = strtolower(array_pop($value));
      
      $temp_rpkps = 'Rpkps'.'_'.$kode_seksi.'.'.$file_ext_rpkps;

      
      if (in_array($file_ext_rpkps, $allowed_ext) === true){ //cek extensi
      
        $lokasi_rpkps = '../../../../rpkps/' . $temp_rpkps;

        $move = move_uploaded_file($file_tmp_rpkps, $lokasi_rpkps); //pindah

        
        if($move){

        $sql = "INSERT INTO mata_kuliah(kode_seksi, nama_mk, jenis_mk, teori_sks, praktek_sks, total_sks, rpkps) VALUES 
        ('" . $kode_seksi . "', '" . $nama_mk. "', '" . $jenis_mk . "', '" . $teori . "', '" . $praktek . "',
          '" . $total_sks. "', '" . $temp_rpkps. "')";    
        
        $stmt = $db->prepare($sql);
        $stmt->execute();

        echo "<script>
              alert('DATA BERHASIL UPLOAD');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=mk&l=1'
              </script>";

          }else{
           echo "<script>
                alert('GAGAL UPLOAD');
                window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=mk&l=1'
                </script>";
          }
           
       }else {
             echo "<script>
              alert('GAGAL, File Bukan DOCX');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=mk&l=1'
              </script>";
            }
    }
}

?>
