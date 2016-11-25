<?php
require_once "../../../connect/a_connect.php";


if(isset($_POST["submit"])){
  $kode_seksi = $_POST["kode_seksi"];
  $nama_mk = $_POST["nama_mk"];
  $jenis_mk = $_POST["jenis_mk"];
  $teori_sks = $_POST["teori_sks"];
  $praktek_sks = $_POST["praktek_sks"];
  $total_sks = $_POST["total_sks"];
  $cover_img = '';

    

    if(!empty($_FILES["rpkps"])){

      $allowed_ext = array('docx','doc');
      
      $file_name_rpkps = $_FILES['rpkps']['name']; //get nama file dari form
      $file_tmp_rpkps = $_FILES['rpkps']['tmp_name']; //set nama file yang akan disimpan ke direktori

    
      $value = explode(".", $file_name_rpkps);
      
      $file_ext_rpkps = strtolower(array_pop($value));
      
      $temp_rpkps = 'Rpkps'.'_'.$kode_seksi;

      
      if (in_array($file_ext_rpkps, $allowed_ext) === true){ //cek extensi
      
        $lokasi_rpkps = '../../../../rpkps/' . $temp_rpkps. '.' . $file_ext_rpkps;

        $move = move_uploaded_file($file_tmp_rpkps, $lokasi_rpkps); //pindah

        $move = $temp_rpkps;
        
        if($move){

            if($_FILES['cover_img']['tmp_name']!=""){

              $tmp_cover_img = $_FILES['cover_img']['tmp_name'];
              $cover_img = $_FILES['cover_img']['name'];
              move_uploaded_file($tmp_cover_img, "../../../../cover_img/" . $cover_img);
              $update_cover_img = ",`cover_img`='".$cover_img."'";

            }

        $sql = "UPDATE mata_kuliah set 'kode_seksi' = '" . $kode_seksi . "',
         'nama_mk' = '" . $nama_mk. "', 
         'jenis_mk' = '" . $jenis_mk . "', 
         'teori_sks' = '" . $teori_sks . "',
         'praktek_sks' = '" . $praktek_sks . "', 
         'total_sks' '" . $total_sks. "',
         'rpkps' = '" . $temp_rpkps. "',
         ".$cover_img." WHERE kode_seksi = '" . $kode_seksi . "'";    
        
        $stmt = $db->prepare($sql);
        $stmt->execute();

        echo "<script>
              alert('DATA BERHASIL DIUBAH');
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
              alert('GAGAL, Ada File Bukan DOC, DOCX');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=mk&l=1'
              </script>";
            }
    }
}

?>
