<?php
require_once "../../../connect/a_connect.php";


if (isset($_POST["submit"])) {
    $kode_seksi   = $_POST["kode_seksi"];
    $judul_materi = $_POST["judul_materi"];
    $materi       = $_POST["materi"];
    $img_materi   = '';
    
    
    
    if (!empty($_FILES["file_materi"])) {
        
        $allowed_ext = array(
            'docx',
            'doc', 'pdf'
        );
        
        $file_name_file_materi = $_FILES['file_materi']['name']; //get nama file dari form
        $file_tmp_file_materi  = $_FILES['file_materi']['tmp_name']; //set nama file yang akan disimpan ke direktori
        
        
        $value = explode(".", $file_name_file_materi);
        
        $file_ext_file_materi = strtolower(array_pop($value));
        
        $temp_file_materi = 'file_materi' . '_' . $judul_materi . '_' . $kode_seksi;
        
        
        if (in_array($file_ext_file_materi, $allowed_ext) === true) { //cek extensi
            
            $lokasi_file_materi = '../../../../file_materi/' . $temp_file_materi . '.' . $file_ext_file_materi;
            
            $move = move_uploaded_file($file_tmp_file_materi, $lokasi_file_materi); //pindah
            
            
            if ($move) {
                
                if (!empty($_FILES["tugas"])) {
                    
                    $allowed_ext = array(
                        'docx',
                        'doc', 'pdf'
                    );
                    
                    $file_name_tugas = $_FILES['tugas']['name']; //get nama file dari form
                    $file_tmp_tugas  = $_FILES['tugas']['tmp_name']; //set nama file yang akan disimpan ke direktori
                    
                    
                    $value = explode(".", $file_name_tugas);
                    
                    $file_ext_tugas = strtolower(array_pop($value));
                    
                    $temp_tugas = 'tugas' . '_' . $judul_materi . '_' . $kode_seksi;
                    
                    
                    if (in_array($file_ext_tugas, $allowed_ext) === true) { //cek extensi
                        
                        $lokasi_tugas = '../../../../tugas/' . $temp_tugas . '.' . $file_ext_tugas;
                        
                        $move = move_uploaded_file($file_tmp_tugas, $lokasi_tugas); //pindah
                        
                        
                        if ($move) {
                            
                            if ($_FILES['img_materi']['tmp_name'] != "") {
                                
                                $tmp_img_materi = $_FILES['img_materi']['tmp_name'];
                                $img_materi     = $_FILES['img_materi']['name'];
                                move_uploaded_file($tmp_img_materi, "../../../../img_materi/" . $img_materi);
                                
                                
                                if (!empty($_FILES["video_materi"])) {
                                    
                                    $allowed_ext = array(
                                        'mp4'
                                    );
                                    
                                    $file_name_video_materi = $_FILES['video_materi']['name']; //get nama file dari form
                                    $file_tmp_video_materi  = $_FILES['video_materi']['tmp_name']; //set nama file yang akan disimpan ke direktori
                                    
                                    
                                    $value = explode(".", $file_name_video_materi);
                                    
                                    $file_ext_video_materi = strtolower(array_pop($value));
                                    
                                    $temp_video_materi = 'video_materi' . '_' . $judul_materi . '_' . $kode_seksi;
                                    
                                    
                                    
                                    if (in_array($file_ext_video_materi, $allowed_ext) === true) { //cek extensi
                                        
                                        $lokasi_video_materi = '../../../../video_materi/' . $temp_video_materi . '.' . $file_ext_video_materi;
                                        
                                        $move = move_uploaded_file($file_tmp_video_materi, $lokasi_video_materi); //pindah
                                        
                                        
                                        if ($move) {
                                            
                                            $sql = "INSERT INTO materi(kode_seksi, judul_materi, materi, file_materi, tugas, img_materi, video_materi) VALUES 
                                                ('" . $kode_seksi . "', '" . $judul_materi . "', '" . $materi . "', '" . $temp_file_materi . ".".$file_ext_file_materi. "', '" . $temp_tugas . ".".$file_ext_tugas. "', '" . $img_materi . "', '" . $temp_video_materi.".".$file_ext_video_materi. "')";
                                            
                                            $stmt = $db->prepare($sql);
                                            $stmt->execute();
                                            
                                            echo "<script>
              alert('DATA BERHASIL UPLOAD 1');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
                                            
                                        } else {
                                            echo "<script>
                alert('GAGAL UPLOAD 2');
                window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
                </script>";
                                        }
                                        
                                    } else {
                                        echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 3');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
                                    }
                                }
                                
                            } else {
                                echo "<script>
                alert('GAGAL UPLOAD 4');
                window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
                </script>";
                            }
                            
                        } else {
                            echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 5');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
                        }
                    }
                } else {
                    echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 6');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
                }
            } else {
                echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 7');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
            }
        } else {
            echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 8');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
        }
    } else {
        echo "<script>
              alert('GAGAL, Ada File Bukan DOC, DOCX 9');
              window.location = 'http://localhost/web_pembelajaran/afterlog/admin/index.php?p=materi&l=1'
              </script>";
    }
}


?>