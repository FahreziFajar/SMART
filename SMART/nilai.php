<?php
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Nilai Siswa</h1>
                        </div>

                        <div class="col-lg-8">
                            <form role="form" method="POST" action="">
                                <div class="form-group">
                                    <input required type="text" name="nisn" class="form-control" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="pu" class="form-control" placeholder="NILAI PENALARAN UMUM">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="bm" class="form-control" placeholder="NILAI BACAAN DAN MENULIS">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="ppu" class="form-control" placeholder="NILAI PENGETAHUAN DAN PEMAHAMAN UMUM">
                                </div>
                                <div class="form-group">
                                    <input required type="text" name="pk" class="form-control" placeholder="NILAI KUANTITATIF">
                                </div>  
                                <div class="form-group">
                                    <input required type="text" name="mtk" class="form-control" placeholder="NILAI MATEMATIKA">
                                </div>  
                                <div class="form-group">
                                    <input required type="text" name="fsk" class="form-control" placeholder="NILAI FISIKA">
                                </div>  
                                <div class="form-group">
                                    <input required type="text" name="kma" class="form-control" placeholder="NILAI KIMIA">
                                </div>  
                                <div class="form-group">
                                    <input required type="text" name="bio" class="form-control" placeholder="NILAI BIOLOGI">
                                </div>    
                                <div class="form-group">
                                    <input type="submit" name="submit" class=" btn btn-primary form-control" value="submit" placeholder="Submit">
                                </div>
                            </form>

                            <?php
                                if (isset($_POST['submit'])) {
                                    $nisn = $_POST['nisn'];
                                    $pu= $_POST['pu'];
                                    $bm= $_POST['bm'];
                                    $ppu= $_POST['ppu'];
                                    $pk= $_POST['pk'];
                                    $mtk= $_POST['mtk'];
                                    $fsk= $_POST['fsk'];
                                    $kma= $_POST['kma'];
                                    $bio= $_POST['bio'];
                                    
                                    // var_dump($nama,$nisn,$kelamin,$kelas,$sekolah);
                                    // die;
                                    $sqlceknilai = "SELECT * FROM penilaian WHERE nisn=$nisn";
                                    $sqlcek  = "SELECT * FROM siswa WHERE nisn=$nisn ";
                                    $cekquery= mysqli_query($dbcon,$sqlcek);
                                    
                                    if (mysqli_num_rows($cekquery) < 1) {
                                        echo "<script>alert('data siswa tidak ditemukan')</script>";
                                    }else{
                                        if (mysqli_num_rows(mysqli_query($dbcon,$sqlceknilai)) < 1 ) {
                                             $sql = "INSERT INTO penilaian (nisn,pu,bm,ppu,pk,mtk,fsk,kma,bio)VALUES ('$nisn','$pu','$bm','$ppu','$pk','$mtk','$fsk','$kma','$bio')";
                                            $query = mysqli_query($dbcon,$sql);
                                            if ($query) {
                                                echo "<script>alert('berhasil memasukkan data penilaian')</script>";
                                            }else{
                                                echo "<script>alert('Gagal Memasukkan data')</script>";
                                            }
                                        }else{
                                                echo "<script>alert('Duplikasi Data dengan NIM tersebut')</script>";

                                        }
                                    }                                        
                                }
                            ?>
                        </div>


                         <!-- Menampilkan Tabel Data -->
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Alternatif
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data siswa dari database -->
                                                <?php
                                                   $sql ="SELECT * FROM penilaian";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;



                                                   while ($siswa=mysqli_fetch_array($query)) {
                                                        $nisn = $siswa['nisn'];
                                                        $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                                                        $namasiswa = mysqli_fetch_array(mysqli_query($dbcon,$sqlnama));
                                                        
                                                ?>
                                                        <tr>
                                                            <td><?=$n?></td>
                                                            <td><?=$siswa['nisn']?></td>
                                                            <td><?=$namasiswa['nama']?></td>
                                                            <td class="text-right"><?=$siswa['pu']?></td>
                                                            <td class="text-right"><?=$siswa['bm']?></td>
                                                            <td class="text-right"><?=$siswa['ppu']?></td>
                                                            <td class="text-right"><?=$siswa['pk']?></td>
                                                            <td class="text-right"><?=$siswa['mtk']?></td>
                                                            <td class="text-right"><?=$siswa['fsk']?></td>
                                                            <td class="text-right"><?=$siswa['kma']?></td>
                                                            <td class="text-right"><?=$siswa['bio']?></td>
                                                            <td><a href="aksi/hapusna.php?name=<?=$siswa['id_penilaian'];?>">hapus</a></td>
                                                        </tr>
                                                <?php
                                                    $n++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Tabel Data -->


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