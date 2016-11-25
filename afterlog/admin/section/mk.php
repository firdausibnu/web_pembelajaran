<?php
require_once "../connect/a_connect.php";


?>
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Mata Kuliah</h3>
            <input data-target="#ModalTambahData" data-toggle="modal" type="button" class="btn btn-success pull-right" value='Tambah Data'/>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <div class="col-xs-12">
            <table id="mata_kuliah" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Kode Seksi</th>
                <th>Nama Mata Kuliah</th>
                <th>Jenis MK</th>
                <th>SKS (Teori)</th>
                <th>SKS (Praktek)</th>
                <th>SKS (Total)</th>
                <th>RPKPS</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * from mata_kuliah";
                $stmt = $db->prepare($sql);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $no = 1;

                ?>
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$row['kode_seksi']?></td>
                  <td><?=$row['nama_mk']?></td>
                  <td><?=$row['jenis_mk']?></td>
                  <td><?=$row['teori_sks']?></td>
                  <td><?=$row['praktek_sks']?></td>
                  <td><?=$row['total_sks']?></td>
                  <td><?=$row['rpkps']?></td>
                  <td>
                    <a href="proc/get/mk.php?n=<?= $row['kode_seksi'] ?>"  data-target="#ModalEditData" style="cursor: pointer;" data-toggle="modal" title="Ubah Data">
                    <i class="fa fa-pencil" aria-hidden="true"></i>E
                    </a>&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;
                                    
                    <a href="proc/delete/mk.php?d=<?= $row['kode_seksi']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?');" data-toggle="tooltip" title="Hapus">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>D
                    </a> 
                  </td>
                </tr>
                <?php $no++;}?>
              </tbody>
              <tfoot>
              <tr>
                  <th>No</th>
                  <th>Kode Seksi</th>
                  <th>Nama Mata Kuliah</th>
                  <th>Jenis MK</th>
                  <th>SKS (Teori)</th>
                  <th>SKS (Praktek)</th>
                  <th>SKS (Total)</th>
                  <th>RPKPS</th>
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
      <form action="proc/add/mk.php" enctype="multipart/form-data" method="POST" role="form">
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <label for="kode_seksi">Kode Seksi</label>
            <input name="kosek" type="number" class="form-control" id="kode_seksi" placeholder="Masukan Kode Seksi">
          </div>
          <div class="form-group">
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input name="nama_mk" type="text" class="form-control" id="nama_mk" placeholder="Nama Mata Kuliah">
          </div>
          <div class="form-group">
            <label for="jenis_mk">Jenis Mata Kuliah</label>
            <select name="jenis_mk" class="form-control">
              <?php
              $sql = "SELECT * from ref_mk";
              $stmt = $db->prepare($sql);
              $stmt->execute();
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?=$row['jenis_mk'];?>"><?=$row['deskripsi'];?></option>
              <?php }?>
            </select>
          </div>
          <div class="form-group">
            <label for="sks-teori">SKS (Teori)</label>
            <input name="sks_teori" type="number" class="form-control" id="kode_seksi" placeholder="Masukan Kode Seksi">
          </div>
          <div class="form-group">
            <label for="kode_seksi">SKS (Praktek)</label>
            <input name="sks_praktek" type="number" class="form-control" id="kode_seksi" placeholder="Masukan Kode Seksi">
          </div>
          <div class="form-group">
            <label for="kode_seksi">SKS (Total)</label>
            <input name="total_sks" type="number" class="form-control" id="kode_seksi" placeholder="Masukan Kode Seksi">
          </div>
          <div class="form-group">
            <label for="rpkps">Upload RPKPS</label>
            <input name="rpkps" type="file" id="rpkps">
          </div>
          <div class="form-group">
                <label for="rpkps">Upload Cover</label>
                <input name="cover_img" type="file" id="rpkps">
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