<?php
require_once "../../../connect/a_connect.php";


if (isset($_POST["submit"])) {
    // print_r($_FILES);
    // return;
    $kode_seksi   = $_POST["kode_seksi"];
    $judul_materi = $_POST["judul_materi"];
    $materi       = $_POST["materi"];
    $update_img_materi   = '';
    $update_file_materi = '';
    $update_tugas = '';
    $update_video_materi = '';
    
    
    
    if ($_FILES['file_materi']['tmp_name'] != "") {
                                
                                $tmp_file_materi = $_FILES['file_materi']['tmp_name'];
                                $file_materi     = $_FILES['file_materi']['name'];
                                move_uploaded_file($tmp_file_materi, "../../../../file_materi/" . $file_materi);
                                $update_file_materi = ",`file_materi`='".$file_materi."'";
                
                if ($_FILES['tugas']['tmp_name'] != "") {
                                
                                $tmp_tugas = $_FILES['tugas']['tmp_name'];
                                $tugas     = $_FILES['tugas']['name'];
                                move_uploaded_file($tmp_tugas, "../../../../tugas/" . $tugas);
                                $update_tugas = ",`tugas`='".$tugas."'";
                            
                            if ($_FILES['img_materi']['tmp_name'] != "") {
                                
                                $tmp_img_materi = $_FILES['img_materi']['tmp_name'];
                                $img_materi     = $_FILES['img_materi']['name'];
                                move_uploaded_file($tmp_img_materi, "../../../../img_materi/" . $img_materi);
                                $update_img_materi = ",`img_materi`='".$img_materi."'";
                                
                                
                                if ($_FILES['video_materi']['tmp_name'] != "") {
                                
                                $tmp_video_materi = $_FILES['video_materi']['tmp_name'];
                                $video_materi     = $_FILES['video_materi']['name'];
                                move_uploaded_file($tmp_video_materi, "../../../../video_materi/" . $video_materi);
                                $update_video_materi = ",`video_materi`='".$video_materi."'";
                                            
                                            $sql = "UPDATE materi set 
                                            kode_seksi = '" . $kode_seksi . "',
                                            judul_materi = '" . $judul_materi . "',
                                            materi = '" . $materi . "',
                                            file_materi = '".$update_file_materi."',
                                            update_tugas = '".$update_tugas."',
                                            img_materi = '".$update_img_materi."',
                                            video materi = '".$update_video_materi."'
                                            WHERE kode_seksi = '".$kode_seksi."'";
                                            
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

?>