<?php
require_once "../connect/a_connect.php";


?>
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Ruang</h3>
            <input data-target="#ModalTambahData" data-toggle="modal" type="button" class="btn btn-success pull-right" value='Tambah Data'/>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <div class="col-xs-12">
            <table id="mata_kuliah" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Kode Ruang</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * from ref_ruang";
                $stmt = $db->prepare($sql);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $no = 1;

                ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?=$row['kode_ruang']?></td>
                  <td><?=$row['deskripsi']?></td>
                  <td>
                    <a href="proc/get/ruang.php?n=<?= $row['id'] ?>"  data-target="#ModalEditData" style="cursor: pointer;" data-toggle="modal" title="Ubah Data">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;
                                    
                    <a href="proc/delete/ruang.php?d=<?= $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?');" data-toggle="tooltip" title="Hapus">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </a> 
                  </td>
                </tr>
                <?php $no++; }?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Kode Ruang</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>


<!-- Modal -->
<div class="modal fade" id="ModalTambahData" tabindex="-1" role="dialog" aria-labelledby="MtambahData">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Mata Kuliah</h4>
      </div>
      <form action="proc/add/ruang.php" enctype="multipart/form-data" method="POST" role="form">
      <div class="modal-body">
        <div class="box-body">
          <div class="form">
            <div class="col-xs-12 col-md-12">
            <label for="sks-teori">Kode Ruang</label>
            <input name="kode_ruang" type="text" class="form-control" id="kode_ruang" placeholder="Kode Ruang" required/>
          </div>
          </div>
          <div class="form">
            <div class="col-xs-12 col-md-12">
            <label for="sks-teori">Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="kode_ruang" placeholder="Deskripsi" required/>
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEditData" tabindex="-1" role="dialog" aria-labelledby="MtambahData">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mata Kuliah</h4>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.for_time').datetimepicker({ format: 'Y:M:D HH:mm:ss' });
</script>