<?php
    $username = $_SESSION['username'];
    $kode_seksi = $_SESSION['kode_seksi'];
    $materi = $db->prepare("SELECT *from materi where kode_seksi = '".$kode_seksi."'");
    $materi->execute();
    $data = $materi->fetchAll();

    if(isset($_SESSION['username'])){
?>
<div id="materi" name="materi">
    <div class="container">
        <div class="row white">
            <div class="row">
                <h2 class="centered">MATERI</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2 centered">
                </div>
            </div>
        </div>
        <!-- /row -->
        <div class="container">
            <div class="row"> 

                <!-- DAFTAR_ISI IMAGE 1 -->
                <?php $no=1; $i=1; foreach ($data as $key) { ?>
                
                <div class="col-md-3">
                    <div class="grid mask">
                        <figure> <img class="img-responsive" src="../img_materi/<?php echo $key['img_materi'];?>" alt="">
                            <figcaption>
                                <h5>MATERI <?php echo $no++; ?></h5>
                                <a href="#materi<?php echo $i++; ?>" class="smoothScroll">Pelajari</a> </figcaption>
                            <!-- /figcaption --> 
                        </figure>
                        <!-- /figure --> 
                    </div>
                    <!-- /grid-mask --> 
                </div>

                <?php } ?>
                <!-- /row --> 

            </div>
            <!-- /row --> 
        </div>
        <!-- /row --> 
    </div>
</div>
<?php
}else{
        header("Location: ../../index.php");
    }
?>