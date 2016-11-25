<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET['n'];
$sql = "select * from jadwal_kuliah where id='$id'";
$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Jadwal Kuliah</h4>
            </div>
            <form action="proc/edit/jadwal_kuliah.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                      <label for="jenis_mk">Kode Seksi</label>
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
                      <label for="jenis_mk">Tempat</label>
                      <select name="tempat" class="form-control">
                        <?php
                        $sql = "SELECT * from ref_ruang";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <option value="<?=$row['kode_ruang'];?>"><?=$row['deskripsi'];?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-xs-8 col-md-6">
                      <label for="sks-teori">Waktu Mulai</label>
                      <input name="waktu_mulai" type="text" class="form-control" id="waktu_mulai" value="<?php echo $data['waktu_mulai'];?>"  placeholder="Waktu Mulai">
                      </div>
                      <div class="col-xs-8 col-md-6">
                      <label for="kode_seksi">Waktu Selesai</label>
                      <input name="waktu_selesai" type="text" class="form-control" id="waktu_selesai" value="<?php echo $data['waktu_selesai'];?>"  placeholder="Waktu Selesai">
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