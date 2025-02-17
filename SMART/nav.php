<?php
   include 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SPK TIF-UTU</title>
        <link rel="website icon" type="png" href="logo.png">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                <img src="title.png" style="width : auto; height : 50px; padding-left : 20px">
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--<ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>-->

                <ul class="nav navbar-right navbar-top-links">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.php" style="font-size : 20px; font-family : serif ; color : #252525"> Dashboard</a>
                            </li>
                            <li>
                                <a href="alternatif.php" style="font-size : 20px; font-family : serif; color : #252525" class="active"><i class="fa fa-file-o fa-fw"></i> Data Alternatif</a>
                            </li>
                            <li>
                                <a href="kriteria.php" style="font-size : 20px; font-family : serif; color : #252525" class=""><i class="fa fa-file-o fa-fw"></i> Data Kriteria</a>
                            </li>
                            <li>
                                <a href="nilai.php" style="font-size : 20px; font-family : serif; color : #252525" class=""><i class="fa fa-edit fa-fw"></i> Isi Nilai Alternatif</a>
                            </li>
                            <li>
                                <a href="spk.php" style="font-size : 20px; font-family : serif; color : #252525" class=""><i class="fa fa-cogs fa-fw"></i> Hasil</a>
                            </li>
                            
                            <!-- <li>
                                <a href="pages/tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>   -->                                                     
                        </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
