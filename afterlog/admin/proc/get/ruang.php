<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// LA101 Lab (Gedung Elektro) 101
$id = $_GET['n'];
$sql = "select * from ref_ruang where id='$id'";
$stmt = $db->prepare($sql);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Ruang</h4>
                </div>
                <form action="proc/edit/ruang.php" enctype="multipart/form-data" method="POST" role="form">
                    <div class="modal-body">
                        <div class="box-body">
                          <div class="form">
                            <div class="col-xs-12 col-md-12">
                            <label for="sks-teori">Kode Ruang</label>
                            <input name="kode_ruang" value="<?php echo $data['kode_ruang'];?>" type="text" class="form-control" id="kode_ruang" placeholder="Kode Ruang" required/>
                          </div>
                          </div>
                          <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                          <div class="form">
                            <div class="col-xs-12 col-md-12">
                            <label for="sks-teori">Deskripsi</label>
                            <input name="deskripsi" value="<?php echo $data['deskripsi'];?>" type="text" class="form-control" id="kode_ruang" placeholder="Deskripsi" required/>
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