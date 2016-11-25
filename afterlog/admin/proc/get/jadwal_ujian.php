<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['n'];
$sql = "select * from jadwal_ujian where id='$id'";
$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Jadwal Kuliah</h4>
                </div>
                <form action="proc/edit/jadwal_ujian.php" enctype="multipart/form-data" method="POST" role="form">
                    <div class="modal-body">
                        <div class="box-body">
                          <div class="form-group">
                          <label for="jenis_mk">Mata Kuliah</label>
                          <select name="kode_seksi" class="form-control">
                            
                            <?php
                            $sql = "SELECT * from mata_kuliah ORDER BY kode_seksi DESC";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?=$row['kode_seksi'];?>"><?=$row['nama_mk'];?></option>
                            <?php }?>
                          </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                        <div class="form-group">
                          <label for="jenis_mk">Kode Ujian</label>
                          <select name="kode_ujian" class="form-control">
                            <?php
                            $sql = "SELECT * from ref_ujian";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <option value="<?=$row['kode_ujian'];?>"><?=$row['deskripsi'];?></option>
                            <?php }?>
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-md-12">
                          <label for="sks-teori">Tanggal Ujian</label>
                          <input name="tanggal_ujian" type="text" value="<?php echo $data['tanggal_ujian'];?>" class="form-control for_time" id="kode_seksi" required/>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit-user-manual">Edit Data</button>
                </div>
            </form>
<script type="text/javascript">
    $('.for_time').datetimepicker({ format: 'Y:M:D HH:mm:ss' });
</script>