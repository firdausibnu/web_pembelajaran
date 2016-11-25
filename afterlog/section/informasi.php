<?php
    $username = $_SESSION['username'];
    $kode_seksi = $_SESSION['kode_seksi'];
    $mata_kuliah = $db->prepare("SELECT *from mata_kuliah where kode_seksi = '".$kode_seksi."'");
    $mata_kuliah->execute();
    $data1 = $mata_kuliah->fetch(PDO::FETCH_ASSOC);

    $mk = $db->prepare("SELECT ref_mk.deskripsi
                        FROM ref_mk
                        INNER JOIN mata_kuliah
                        ON ref_mk.jenis_mk=mata_kuliah.jenis_mk");
    $mk->execute();
    $data4 = $mk->fetch(PDO::FETCH_ASSOC);

    $jadwal_ujian = $db->prepare("SELECT *from jadwal_ujian where kode_seksi = '".$kode_seksi."'");
    $jadwal_ujian->execute();
    $data2 = $jadwal_ujian->fetchAll();

    $kodeuji = $db->prepare("SELECT ref_ujian.deskripsi
                        FROM ref_ujian
                        INNER JOIN jadwal_ujian
                        ON ref_ujian.kode_ujian=jadwal_ujian.kode_ujian");
    $kodeuji->execute();
    $data5 = $kodeuji->fetch(PDO::FETCH_ASSOC);

    $jadwal_kuliah = $db->prepare("SELECT *from jadwal_kuliah where kode_seksi = '".$kode_seksi."'");
    $jadwal_kuliah->execute();
    $data3 = $jadwal_kuliah->fetchAll();
    if(isset($_SESSION['username'])){
?>
<div id="informasi" name="informasi">
        <!-- container -->
        <div class="container">
            <h2>INFORMASI</h2>
            <hr>
            
                <div class="bottom-grid col-md-4">
                    <h4>INFO PERKULIAHAN</h4>
                    <p align="justify">Mata kuliah ini termasuk mata kuliah <?php echo $data4['deskripsi'];?>
                        untuk mahasiswa Pendidikan Teknik Informatika dan 
                        Komputer Universitas Negeri Jakarta. <br><br>
                        
                        Mata kuliah ini
                        berbobot <?php echo $data1['total_sks'];?> SKS, yang terbagi menjadi <?php echo $data1['teori_sks'];?> SKS teori dan 
                        <?php echo $data1['praktek_sks'];?> SKS praktek. 
                    </p>
                </div>
                <div class="bottom-grid col-md-4">
                    <h4>JADWAL UJIAN</h4>
                    
                    <p align="justify">  <?php echo $data5['deskripsi'];?> Dilaksanakan pada <?php foreach($data2 as $key) { ?> <?php echo $key['tanggal_ujian'];?><?php } ?><br>
                     
                    <!-- <br>
                        UAS Dilaksanakan pada 04 Januari 2016
                    </p> -->
                </div>
            <div class="bottom-grid col-md-4">
                    <h4>JADWAL PERKULIAHAN</h4>
                    <?php foreach($data3 as $row) { ?>
                    <h3>  Kode seksi <?php echo $row['kode_seksi'];?></h3>
                    
                    <p align="justify">
                        <?php echo $row['tempat'];?> <br> <?php echo $row['waktu_mulai'];?>-<?php echo $row['waktu_selesai'];?><br>
                    <?php } ?>
                    <!-- <h3>  Kode seksi 9549</h3>
                    <p align="justify">
                        Lab (Gedung Elektro) 101 <br> Kamis 10.00-12.00 WIB<br> -->
                    
                </div>  
            </div>
        
        <div class="container">
                <div class="bottom-grid col-md-4">
                    
                </div>
                <div align="center" class="bottom-grid col-md-4">
                  <a href="../rpkps/rpkps webdis.docx"><img class="img img-circle" src="../img/materi/A.png" height="80px" width="80px"></a>
        <h4> DOWNLOAD RPKPS </h4>  
                </div>
            <div class="bottom-grid col-md-4">
                   
                </div>  
            </div>
        <!-- //container -->
    <!-- //banner-bottom -->
</div>
<?php
}else{
        header("Location: ../../index.php");
    }
?>