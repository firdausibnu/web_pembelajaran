<?php
require_once "../connect/a_connect.php";
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List User</h3>
                <input data-target="#ModalTambahData" data-toggle="modal" type="button" class="btn btn-success pull-right" value='Tambah Data'/>
            </div>
            <div class="box-body table-responsive">
                <div class="col-xs-12">
                    <table id="user-mhs" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Seksi</th>
                                <th>Judul Materi</th>
                                <!-- <th>Materi</th> -->
                                <th>Tugas</th>
                                <th>Gambar Materi</th>
                                <th>Video Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from materi order by id desc";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            $no = 1;

                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['kode_seksi'] ?></td>
                                    <td><?= $row['judul_materi'] ?></td>
                                    <td><?= $row['tugas'] ?></td>
                                    <td><?= $row['img_materi'] ?></td>
                                    <td><?= $row['video_materi'] ?></td>
                                    <td>

                                    <a href="proc/get/materi.php?n=<?= $row['id'] ?>"  data-target="#ModalEditData" style="cursor: pointer;" data-toggle="modal" title="Ubah Data">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;
                                    
                                    <a href="proc/delete/materi.php?d=<?= $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?');" data-toggle="tooltip" title="Hapus">
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                    </a> 
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Seksi</th>
                                <th>Judul Materi</th>
                                <!-- <th>Materi</th> -->
                                <th>Tugas</th>
                                <th>Gambar Materi</th>
                                <th>Video Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ModalTambahData" tabindex="-1" role="dialog" aria-labelledby="MtambahData">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Materi</h4>
            </div>
            <form action="proc/add/materi.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="mata_kuliah">Mata Kuliah Terdaftar</label>
                            <select name="kode_seksi" class="form-control">
                                <option disabled selected value> -- Pilih Mata Kuliah -- </option>
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
                            <input name="judul_materi" type="text" class="form-control" id="nim" placeholder="Judul Materi" required/>
                        </div>
                        <div class="form-group">
                            <label for="Nama">Materi</label>
                            <textarea class="form-control ckeditor" id="editor1" name="materi" placeholder="Materi" class="materialize-textarea" rows="6" required/></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nim">File Materi</label>
                            <input name="file_materi" id="file_materi" type="file" class="form-control" id="nim" placeholder="Video Materi" required/>
                        </div>
                        <div class="form-group">
                            <label for="Nama">Tugas</label>
                            <input name="tugas" id="tugas" type="file" class="form-control" id="nim" placeholder="Tugas" required/>
                        </div>
                        <div class="form-group">
                            <label for="nim">Gambar Materi</label>
                            <input name="img_materi" id="img_materi" type="file" class="form-control" id="nim" placeholder="Gambar Materi" required/>
                        </div>
                        <div class="form-group">
                            <label for="nim">Video Materi</label>
                            <input name="video_materi" type="file" class="form-control" id="nim" placeholder="Video Materi" required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit">Tambah Data</button>
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
                <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>




<script type="text/javascript">

    $("a[data-target=#ModalEditData]").click(function (ev) {
        ev.preventDefault();
        var target = $(this).attr("href");

        // load the url and show modal on success
        $("#ModalEditData .modal-body").load(target, function () {
            $("#ModalEditData").modal("show");
        });
    });



</script>