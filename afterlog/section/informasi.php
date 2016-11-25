<?php
    $username = $_SESSION['username'];
    $kode_seksi = $_SESSION['kode_seksi'];

    $mata_kuliah = $db->prepare("SELECT ref_mk.deskripsi, mata_kuliah.teori_sks, mata_kuliah.praktek_sks, mata_kuliah.total_sks
                        FROM ref_mk
                        INNER JOIN mata_kuliah
                        ON ref_mk.jenis_mk=mata_kuliah.jenis_mk AND mata_kuliah.kode_seksi = '".$kode_seksi."'");
    $mata_kuliah->execute();
    $data1 = $mata_kuliah->fetch(PDO::FETCH_ASSOC);

    $jadwal_ujian = $db->prepare("SELECT ref_ujian.deskripsi, jadwal_ujian.tanggal_ujian
                        FROM ref_ujian
                        INNER JOIN jadwal_ujian
                        ON ref_ujian.kode_ujian=jadwal_ujian.kode_ujian AND jadwal_ujian.kode_seksi = '".$kode_seksi."'");
    $jadwal_ujian->execute();
    $data2 = $jadwal_ujian->fetchAll();

    $jadwal_kuliah = $db->prepare("SELECT ref_ruang.deskripsi, jadwal_kuliah.tempat, jadwal_kuliah.kode_seksi, jadwal_kuliah.waktu_mulai, jadwal_kuliah.waktu_selesai
                        FROM ref_ruang
                        INNER JOIN jadwal_kuliah
                        ON ref_ruang.kode_ruang=jadwal_kuliah.tempat AND jadwal_kuliah.kode_seksi = '".$kode_seksi."'");
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
                    <p align="justify">Mata kuliah ini termasuk mata kuliah <?php echo $data1['deskripsi'];?>
                        untuk mahasiswa Pendidikan Teknik Informatika dan 
                        Komputer Universitas Negeri Jakarta. <br><br>
                        
                        Mata kuliah ini
                        berbobot <?php echo $data1['total_sks'];?> SKS, yang terbagi menjadi <?php echo $data1['teori_sks'];?> SKS teori dan 
                        <?php echo $data1['praktek_sks'];?> SKS praktek. 
                    </p>
                </div>
                <div class="bottom-grid col-md-4">
                    <h4>JADWAL UJIAN</h4>
                    <?php foreach ($data2 as $key) { ?>
                    
                    <p align="justify">  
                    <?php echo $key['deskripsi'];?> Dilaksanakan pada  
                    <?php echo $key['tanggal_ujian'];?>  <br>
                    </p>

                    <?php } ?>
                    <!-- <br>
                        UAS Dilaksanakan pada 04 Januari 2016
                    </p> -->
                </div>
            <div class="bottom-grid col-md-4">
                    <h4>JADWAL PERKULIAHAN</h4>
                    <?php foreach($data3 as $row) { ?>
                    <h3>  Kode seksi <?php echo $row['kode_seksi'];?></h3>
                    
                    <p align="justify">
                        <?php echo $row['tempat'];?> <?php echo $row['deskripsi'];?>
                        <br> <?php echo $row['waktu_mulai'];?> sampai <?php echo $row['waktu_selesai'];?><br>
                    <?php } ?>
                    <!-- <h3>  Kode seksi 9549</h3>
                    <p align="justify">
                        Lab (Gedung Elektro) 101 <br> Kamis 10.00-12.00 WIB<br> -->
                    
                </div>  
            </div>
        
        <div class="container">
                <div class="bottom-grid col-md-4">
                    
                </div>
                <?php
                $cek_rpkps=$db->prepare("SELECT rpkps FROM mata_kuliah 
                       WHERE kode_seksi = '".$kode_seksi."'");
                $cek_rpkps->execute();
                $rpkps = $cek_rpkps->fetchAll();
                        if ($rpkps  != '') {
                ?>
                <div align="center" class="bottom-grid col-md-4">
                  <a href="../rpkps/<?php echo $data1['rpkps'];?>"><img class="img img-circle" src="../img/materi/A.png" height="80px" width="80px"></a>
                    <h4> DOWNLOAD RPKPS </h4>  
                </div>
                <?php } else { ?>
                <div align="center" class="bottom-grid col-md-4">
                  <a href="#"><img class="img img-circle" src="../img/materi/A.png" height="80px" width="80px"></a>
                    <h4> RPKPS BELUM DI UPLOAD </h4>  
                </div>
                <?php } ?>
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