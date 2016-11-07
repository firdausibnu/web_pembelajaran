<?php

require_once "../../../connect/a_connect.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nim = $_GET['n'];
$sql = "select * from user where nim='$nim'";
$stmt = $db->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo '<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
            </div>
            <form action="proc/add/user.php" enctype="multipart/form-data" method="POST" role="form">
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input name="nim" type="number" min="0" class="form-control" id="nim" value="'.$row['nim'].'" disabled>
                        </div>
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" value= >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="submit-user-manual">Tambah Data</button>
                </div>
            </form>';
