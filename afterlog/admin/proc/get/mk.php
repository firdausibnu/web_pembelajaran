<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$kode_seksi = $_GET['n'];
$sql = "select * from mata_kuliah where kode_seksi='$kode_seksi'";
$stmt = $db->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mata Kuliah</h4>
            </div>
            <form action="proc/edit/mk.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_seksi">Kode Seksi</label>
                            <input name="kode_seksi" type="number" min="0" class="form-control" id="kode_seksi" value="<?php echo $row['kode_seksi'];?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama_mk">Nama Mata Kuliah</label>
                            <input name="nama_mk" type="text" class="form-control" id="nama_mk" value="<?php echo $row['nama_mk'];?>"  placeholder="Nama Mata Kuliah">
                        </div>
                        <div class="form-group">
                            <label for="jenis_mk">Jenis Mata Kuliah</label>
                            <select name="jenis_mk" class="form-control">
                              <?php
                              $sql2 = "SELECT * from ref_mk";
                              $stmt2 = $db->prepare($sql2);
                              $stmt2->execute();
                              while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                              <option value="<?php echo $row2['jenis_mk'];?>"><?php echo $row2['deskripsi']; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                      <div class="form-group">
                            <label for="sks-teori">SKS (Teori)</label>
                            <input name="sks_teori" type="number" class="form-control" id="kode_seksi" value="<?php echo $row['teori_sks'];?>" placeholder="Masukan Kode Seksi">
                      </div>
                      <div class="form-group">
                            <label for="kode_seksi">SKS (Praktek)</label>
                            <input name="sks_praktek" type="number" class="form-control" id="kode_seksi" value="<?php echo $row['praktek_sks'];?>" placeholder="Masukan Kode Seksi">
                      </div>
                      <div class="form-group">
                            <label for="kode_seksi">SKS (Total)</label>
                            <input name="total_sks" type="number" class="form-control" id="kode_seksi" value="<?php echo $row['total_sks'];?>" placeholder="Masukan Kode Seksi">
                      </div>
                      <div class="form-group">
                            <label for="rpkps">Upload RPKPS</label>
                            <input name="rpkps" type="file" value="<?php echo $row['rpkps'];?>" id="rpkps">
                      </div>
                      <div class="form-group">
                            <label for="rpkps">Upload Cover</label>
                            <input name="cover_img" type="file" value="<?php echo $row['cover_img'];?>" id="rpkps">
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit">Edit Data</button>
                </div>
            </form>