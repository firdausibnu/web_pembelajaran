<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['n'];
$sql = "select * from materi where id='$id'";
$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Materi</h4>
            </div>
            <form action="proc/edit/materi.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="mata_kuliah">Mata Kuliah Terdaftar</label>
                            <select name="kode_seksi" class="form-control">
                                <?php
                                $sql = "SELECT * from mata_kuliah";
                                $stmt = $db->prepare($sql);
                                $stmt->execute();
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <option value="<?= $row['kode_seksi']; ?>"><?= $row['nama_mk']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nim">Judul Materi</label>
                            <input name="judul_materi" type="text" class="form-control" id="nim" placeholder="Judul Materi"/>
                        </div>
                        <div class="form-group">
                            <label for="Nama">Materi</label>
                            <textarea class="form-control ckeditor" id="editor1" name="materi" placeholder="Materi" class="materialize-textarea" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nim">File Materi</label>
                            <input name="file_materi" id="file_materi" type="file" class="form-control" id="nim" placeholder="Video Materi"/>
                        </div>
                        <div class="form-group">
                            <label for="Nama">Tugas</label>
                            <input name="tugas" id="tugas" type="file" class="form-control" id="nim" placeholder="Tugas"/>
                        </div>
                        <div class="form-group">
                            <label for="nim">Gambar Materi</label>
                            <input name="img_materi" id="img_materi" type="file" class="form-control" id="nim" placeholder="Gambar Materi"/>
                        </div>
                        <div class="form-group">
                            <label for="nim">Video Materi</label>
                            <input name="video_materi" type="file" class="form-control" id="nim" placeholder="Video Materi"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit">Tambah Data</button>
                </div>
            </form>