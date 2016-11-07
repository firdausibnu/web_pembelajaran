<?php
require_once "../connect/a_connect.php";
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List User</h3>
                <input data-target="#ModalTambahDataCsv" data-toggle="modal" type="button" class="btn btn-primary pull-right" value='Import CSV'/>
                <span class="pull-right">&nbsp;</span>
                <input data-target="#ModalTambahData" data-toggle="modal" type="button" class="btn btn-success pull-right" value='Tambah Data'/>
            </div>
            <div class="box-body table-responsive">
                <div class="col-xs-12">
                    <table id="user-mhs" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from user where role = 1";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();
                            $no = 1;

                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row['nim'] ?></td>
                                    <td><?= $row['password'] ?></td>
                                    <td><a href="proc/get/user.php?n=<?= $row['nim'] ?>" data-target="#ModalDetail" style="cursor: pointer;" data-toggle="modal" title="Detail"><i class="fa fa-info" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<a href="proc/get/user.php?n=<?= $row['nim'] ?>"  data-target="#ModalEditData" style="cursor: pointer;" data-toggle="modal" title="Ubah Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;<a href="proc/delete/user.php?d=<?= $row['nim']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?');" data-toggle="tooltip" title="Hapus"><i class="fa fa-times-circle" aria-hidden="true"></i></a> </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Password</th>
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
                <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
            </div>
            <form action="proc/add/user.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input name="nim" type="number" min="0" class="form-control" id="nim" placeholder="Masukan NIM">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="Nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="Nama" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="mata_kuliah">Mata Kuliah Terdaftar</label>
                            <select name="mata_kuliah" class="form-control">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit-user-manual">Tambah Data</button>
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


<div class="modal fade" id="ModalTambahDataCsv" tabindex="-1" role="dialog" aria-labelledby="MtambahDataCsv">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data User (CSV</h4>
            </div>
            <form action="proc/add/user.php" onSubmit="return validateForm()" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="rpkps">Upload File .csv</label>
                            <input name="excel"type="file" id="excel">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit-csv">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script type="text/javascript">
    function validateForm()
    {

        var file = $("[name=excel]").val();

        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }

        if (file == '') {
            alert("File Masih Kosong");
            return false;
        } else if (!hasExtension('excel', ['.csv'])) {
            $("[name=excel]").val('');
            alert("Hanya file CSV yang diijinkan.");
            return false;
        }
    }

    $("a[data-target=#ModalEditData]").click(function (ev) {
        ev.preventDefault();
        var target = $(this).attr("href");

        // load the url and show modal on success
        $("#ModalEditData .modal-body").load(target, function () {
            $("#ModalEditData").modal("show");
        });
    });



</script>