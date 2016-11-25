<script type="text/javascript">
  function editprofile()
        {
       $('#ModalProfile').modal('hide');
              $('#ModalEditProfile').modal();
            }
</script>
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#beranda"><img src="../img/logo-unj.png" height="40px" weight="40px" align="left"/><img src="../img/logo/logo-kecil.png" align="center"/></a> DESAIN WEB </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#beranda" class="smoothScroll">HOME</a></li>
          <li> <a href="#informasi" class="smoothScroll">INFORMASI</a></li>
          <li> <a href="#materi" class="smoothScroll"> MATERI</a></li>
          <li> <a href="#kuis" class="smoothScroll"> LATIHAN</a></li>
          <li><a href="#" data-target="#ModalProfile" data-toggle="modal" class="smoothScroll">Hallo, <?php echo $data['nama'];?>!</a></li>
          <li><a href="#myModal" data-toggle="modal" class="smoothScroll">LOGOUT</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>

            <!-- Modal -->
<div class="modal fade" id="ModalEditProfile" tabindex="-1" role="dialog" aria-labelledby="MtambahData">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
      </div>
      <form action="admin/proc/edit/profileuser.php" enctype="multipart/form-data" method="POST" role="form">
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            
            <input name="nama" type="text" class="form-control" value="<?php echo $data['nama']; ?>" id="kode_seksi" placeholder="Nama">
          </div>
          <input type="hidden" name="nim" value="<?php echo $data['nim'];?>">
          <div class="form-group">
            
            <input name="email" type="email" class="form-control" value="<?php echo $data['email']; ?>" id="nama_mk" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="rpkps">Upload Foto</label><br><br>
            <img style="max-width: 100px;max-height: 100px;" src="../foto_profile/<?php echo $data['foto'];?>"><br><br>
            <input name="foto" value="<?php echo $data['foto'];?>" type="file" id="rpkps">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalProfile" tabindex="-1" role="dialog" aria-labelledby="MtambahData">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Profile</h4>
      </div>
      <center><img style="max-width: 150px;max-height: 150px;margin-top: 10px;border-radius: 100%;border: 5px solid #eee;" src="../foto_profile/<?php echo $data['foto'];?>"></center>
      <center style="font-size: 24px;"><?php echo $data['nama']; ?></center>
      <center><?php echo $data['email']; ?></center>
      <div class="modal-footer">
        <button type="submit" onclick="editprofile()" class="btn btn-primary" name="submit">Edit Profile</button>
      </div>
    </div>  
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4>Apakah Anda Yakin Ingin Keluar?</h4>
                        </div>
                        <div class="modal-body">
                            <!-- FORM -->
                            <div class="form">
                                <!--tab-content -->
                                <div class="tab-content"> 
                                    <div id="login">
                                        <a href="../afterlog/login/logout.php" class="button button-block text-center" role="button" style="background-color:#F47A62" >YA</a><br/>
                                           <a href="../afterlog/index.php" class="button button-block text-center" role="button" style="background-color:#F47A62">TIDAK</a>
                                    </div>
                                    <div></div> 
                                </div> <!-- /tab-content -->
                            </div><!-- /FORM --> 
                        </div>
                        <!-- /.modal-content --> 
                    </div>
                    <!-- /.modal-dialog --> 
                </div>
                <!-- /.modal --> 
            </div>