<?php
    $username = $_SESSION['username'];
    $kode_seksi = $_SESSION['kode_seksi'];
    $materi = $db->prepare("SELECT *from materi where kode_seksi = '".$kode_seksi."'");
    $materi->execute();
    $data = $materi->fetchAll();

    if(isset($_SESSION['username'])){
?>
<!-- ==== MATERI 1 ==== -->
<?php $no=1; $i=1; foreach ($data as $key) { ?>
<div id="materi1" name="materi<?php echo $i++; ?>">
  <div class="container">
    <div class="row white">
      <div class="col-md-6">
        <h2>MATERI <?php echo $no++; ?> - <?php echo $key['judul_materi']; ?></h2>
        <hr>
        <h3>Pada materi ini, Anda akan mempelajari:</h3>
        <h3 id="mat" align="justify">
        <?php echo $key['materi']; ?>
        </h3>
        <?php
        $cek_materi=$db->prepare("SELECT file_materi FROM materi 
               WHERE kode_seksi = '".$kode_seksi."'");
        $cek_materi->execute();
        $materi = $cek_materi->fetchAll();
                if ($materi  != ''){
        ?>
        <div class="col-lg-3 centered">
            <a href="../file_materi/<?php echo $key['file_materi'];?>"><img class="img img-circle" src="../img/materi/A.png" height="120px" width="120px"></a>
        <h4> DOWNLOAD MATERI </h4>
        </div>
        <?php }?>
        <?php
        $cek_tugas=$db->prepare("SELECT tugas FROM materi 
               WHERE kode_seksi = '".$kode_seksi."'");
        $cek_tugas->execute();
        $tugas = $cek_tugas->fetchAll();
                if ($tugas  != ''){
        ?>
        <div class="col-lg-3 centered">
            <a href="../tugas/<?php echo $key['tugas'];?>"><img class="img img-circle" src="../img/materi/N.png" height="120px" width="120px"></a>
        <h4> DOWNLOAD TUGAS </h4>
        </div>
        <?php } ?>
        </div>
        <?php
        $cek_video=$db->prepare("SELECT video_materi FROM materi 
               WHERE kode_seksi = '".$kode_seksi."'");
        $cek_video->execute();
        $video = $cek_video->fetchAll();
                if ($video  != ''){
        ?>
        <div class="col-md-6"> <video width="560" height="420" controls="controls"><source src="../video_materi/<?php echo $key['video_materi'];?>" type="video/mp4">
            Your browser does not support the video tag.</video>
        </div>
        <?php } else { ?>
        <div class="col-md-6"> <img class="img-responsive" src="../img_materi/<?php echo $key['img_materi'];?>" align=""> </div>
        <?php  } ?>
    </div>
    <!-- row --> 
  </div>
</div>
<?php } ?>
<!-- /MATERI 1 -->
  
<?php
}else{
        header("Location: ../../index.php");
    }
?>