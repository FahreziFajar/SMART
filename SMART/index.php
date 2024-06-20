<?php
    // include 'cek.php';
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <img src="spk.png" style="width : 100%; height : auto">
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h2 style="font-size : 20px; font-family : serif ; color : #252525" >Dokumentasi</h2>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        <h3 style="font-size : 21px; font-family : Arial; color : #252525">Selamat datang, <?=$_SESSION['username']?>. Sistem ini dibangun untuk memudahkan pengambilan keputusan penerimaan mahasiswa baru pada program studi Teknologi Informasi Universitas Teuku Umar dengan menggunakan metode <b><i>Simple Multi Attribute Rating Technique </i> (SMART)</b>. <a href="alternatif.php" class="alert-link">masukkan data siswa/alternatif</a></h3>
                                    </div>
                                </div>
                
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>                        <!-- /.col-lg-12 -->
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