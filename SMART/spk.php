<?php
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">HASIL SPK</h1>
                            <a href="index.php">kembali</a>
                        </div>
                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai Penalaran Umum</th>
                                    <th>Nilai Bacaan dan Menulis</th>
                                    <th>Nilai Pengetahuan Umum</th>
                                    <th>Nilai Kuantitatif</th>
                                    <th>Nilai Matematika</th>
                                    <th>Nilai Fisika</th>
                                    <th>Nilai Kimia</th>
                                    <th>Nilai Biologi</th>
                                    <th>Nilai Bobot Evaluasi</th> 
                                    <th>Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $n = 1 ;

                                    $sqljumlah ="SELECT SUM(bobot) FROM kriteria";
                                    $queryjumlah= mysqli_query($dbcon,$sqljumlah);
                                    $jumlah0=mysqli_fetch_array($queryjumlah);
                                    $jumlah = $jumlah0[0];
                                    
                                    // bobot
                                    $sqlkriteria ="SELECT bobot FROM kriteria";
                                    $querykriteria = mysqli_query($dbcon, $sqlkriteria);
                                    $bobot=[];
                                    while ($bariskriteria= mysqli_fetch_array($querykriteria)) {
                                        $bobot[]=$bariskriteria['bobot'];
                                    }
                                    // var_dump($bobot);die();
                                    //end bobot
                                    
                                    //nilai 
                                    $sqlnilai = "SELECT * FROM penilaian";
                                    $querynilai = mysqli_query($dbcon,$sqlnilai);

                                    

                                    while ($barisnilai=mysqli_fetch_array($querynilai)) {  
                                        //nama
                                        $nisn= $barisnilai['nisn'];
                                        $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                                        $namasiswa = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                        //nilai
                                        $pu = $barisnilai['pu']*($bobot[0]/$jumlah);
                                        $bm = $barisnilai['bm']*($bobot[1]/$jumlah);
                                        $ppu = $barisnilai['ppu']*($bobot[2]/$jumlah);
                                        $pk = $barisnilai['pk']*($bobot[3]/$jumlah);
                                        $mtk = $barisnilai['mtk']*($bobot[4]/$jumlah);
                                        $fsk = $barisnilai['fsk']*($bobot[5]/$jumlah);
                                        $kma = $barisnilai['kma']*($bobot[6]/$jumlah);
                                        $bio = $barisnilai['bio']*($bobot[7]/$jumlah);
                                        $nilaievaluasi = $pu + $bm + $ppu + $pk + $mtk + $fsk + $kma + $bio;
                                        if ($nilaievaluasi >= 640) {
                                            $jurusan ="LULUS";
                                        }else{
                                            $jurusan = "TIDAK LULUS";
                                        }
                                        ?>
                                        <tr>
                                        <td><?=$n?></td>
                                        <td><?=$barisnilai['nisn']?></td>
                                        <td><?=$namasiswa['nama'] ?></td>
                                        <td class="text-right"><?=$barisnilai['pu']?></td>
                                        <td class="text-right"><?=$barisnilai['bm']?></td>
                                        <td class="text-right"><?=$barisnilai['ppu']?></td>
                                        <td class="text-right"><?=$barisnilai['pk']?></td>
                                        <td class="text-right"><?=$barisnilai['mtk']?></td>
                                        <td class="text-right"><?=$barisnilai['fsk']?></td>
                                        <td class="text-right"><?=$barisnilai['kma']?></td>
                                        <td class="text-right"><?=$barisnilai['bio']?></td>
                                        <td class="text-right"><b><?= round($nilaievaluasi,3)?></b></td>
                                        <td><b><?= $jurusan?></b></td>
                                        </tr>
                                    <?php    
                                    $n++;
                                    }
                                        
                                    ?>
                                    

                               
                                
                                    
                                </tbody>
                            </table>    
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php 
    require_once 'foot.php';
 ?>