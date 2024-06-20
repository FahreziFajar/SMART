<?php
    include 'onek.php';
    require_once 'nav.php';
    // if (isset($_GET['id']=='hapus' && $_GET['name'])) {
    //  echo "dihapus.";
    // }
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Siswa</h1>
                        </div>

                        <div class="col-lg-8">
                            <form role="form" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" required name="nisn" class="form-control" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="nama" class="form-control" placeholder="NAMA SISWA">
                                </div>
                                <div class="form-group">
                                    <select name="kelamin" required class="form-control">
                                        <option disabled selected>Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="tahun_lulus" class="form-control" placeholder="TAHUN KELULUSAN">
                                </div>
                                <div class="form-group">
                                    <input type="text" required name="sekolah" class="form-control" placeholder="SEKOLAH">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="form-control btn btn-primary form-control" value="submit" placeholder="submit">
                                </div>
                            </form>
                            <?php
                                if (isset($_POST['submit'])) {
                                    $nisn   = $_POST['nisn'];
                                    $nama   = $_POST['nama'];
                                    $kelamin= $_POST['kelamin'];
                                    $tahun_lulus  = $_POST['tahun_lulus'];
                                    $sekolah= $_POST['sekolah'];
                                    // var_dump($nama,$nisn,$kelamin,$tahum_lulus,$sekolah);
                                    // die;

                                    //sql insert to siswa
                                    $sql = "INSERT INTO siswa (nisn,nama,kelamin,tahun_lulus,siswa)VALUES ('$nisn','$nama','$kelamin','$tahun_lulus','$sekolah')";
                                    $query = mysqli_query($dbcon,$sql);
                                    if ($query) {
                                        echo "<script>alert('berhasil memasukkan data Alternatif')</script>";
                                    }else{
                                        echo "<script>alert('Gagal Memasukkan data')</script>";

                                    }
                                    
                                }else{
                                   
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NISN</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Kelamin</th>
                                                    <th>Tahun Kelulusan</th>
                                                    <th>Asal Sekolah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengeluarkan data siswa dari database -->
                                                <?php
                                                   $sql ="SELECT * FROM siswa";
                                                   $query = mysqli_query($dbcon, $sql);
                                                   $n = 1 ;
                                                   while ($siswa=mysqli_fetch_array($query)) {
                                                        
                                                ?>
                                                <tr>
                                                    <td><?=$n?></td>
                                                    <td><?=$siswa['nisn']?></td>
                                                    <td><?=$siswa['nama']?></td>
                                                    <td><?=$siswa['kelamin']?></td>
                                                    <td><?=$siswa['tahun_lulus']?></td>
                                                    <td><?=$siswa['siswa']?></td>
                                                    <td><a onclick="return confirm('Apakah yakin menghapus ?')" href='aksi/hapusa.php?name=<?=$siswa['nisn'];?>'>hapus</a></td>
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