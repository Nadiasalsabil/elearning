<?php
  
  include '../config/koneksi.php';

  session_start();

   if (!isset($_SESSION['username'])){
header("Location:../index.php");
}

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "admin";

?>




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | SMP Negeri 34 Bekasi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color:  #191970;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color:    #191970;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation" >
                    <i class="fa fa-bars"></i>
                </button><br>
                <img src="../images/2.png" width="80px" height="80px">
                <a class="navbar-brand" href="./"><font color="white"><b>ADMIN SMP N 34 Bekasi</b></a></font>
             
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse" >
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin.php?halaman=dashboard"> <i class="menu-icon fa fa-dashboard"></i><font color="white"><b>Dashboard</b></font> </a>
                    </li>
                    <h3 class="menu-title"><b><font color="white">SMP Negeri 34 Bekasi</font></b></h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop" style="color: white;"></i><font color="white"><b>Data</b></font></a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#191970;">
                            <li><i class="fa fa-puzzle-piece" style="color: white;"></i><a href="admin.php?halaman=user"><font color="white"><b>User</b></font></a></li>
                            <li><i class="fa fa-id-badge" style="color: white;"></i><a href="admin.php?halaman=siswa"><font color="white"><b>Siswa</b></font></a></li>
                            <li><i class="fa fa-bars" style="color: white;"></i><a href="admin.php?halaman=guru"><font color="white"><b>Guru</b></font></a></li>
                           
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table" style="color: white;"></i><font color="white"><b>Jadwal KBM</b></font></a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#191970;">
                            <li><i class="fa fa-table" style="color: white;"></i><a href="admin.php?halaman=jadwal-siswa"><font color="white"><b>Jadwal Siswa</b></font></a></li>
                            <li><i class="fa fa-table" style="color: white;"></i><a href="admin.php?halaman=jadwal-guru"><font color="white"><b>Jadwal Guru</b></font></a></li>
                            
                        </ul>
                    </li>
                  

                  
                    <li><a href="#" > <i class="menu-icon fa fa-th" style="color: white;"></i><font color="white"><b>Kritik & Saran</b></font></a></li>
                    


                    <li><a href="../config/logout.php" > <i class="menu-icon fa fa-sign-out" style="color: white;"></i><font color="white"><b>Logout</b></font></a></li>
                         
                  

                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->

        <header id="header" class="header">
 <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left" style="background-color:black;"><i class="fa fa fa-tasks" style="color:white;"></i></a>
                    <div class="header-left">
                        
                       
                    
                    <div class="header-left">
                      
                        <div class="form-inline">
                           
                        </div>

                      

                        <div class="dropdown for-message">
                          
                        <h4><b><font color="blue"><center>SMP NEGERI 34 BEKASI</center></font></b>
                        <center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center>

                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        
                       

                        <div class="user-menu dropdown-menu">
                              
                        </div>
                    </div>

                 

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <marquee> Selamat datang di Sistem Halaman Admin SMP Negeri 34 Bekasi </marquee>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <marquee> Selamat datang di Sistem Halaman Admin SMP Negeri 34 Bekasi </marquee>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
               <?php
                if ($halaman=='siswa')
                include 'siswa.php';

             if ($halaman=='dashboard')
                include 'dashboard.php';

             if ($halaman=='guru')
                include 'guru.php';

             if ($halaman=='user')
                include 'user.php';

             if ($halaman=='jadwal-guru')
                include 'jadwal-guru.php';


             if ($halaman=='jadwal-siswa')
                include 'jadwal-siswa.php';
                  
               ?>    
                   
                </div>
            </div>


           
            <!--/.col-->

            <!--/.col-->

           
            <!--/.col-->

            
            <!--/.col-->

           


      
    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
