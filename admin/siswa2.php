<?php
  
  include '../config/koneksi.php';

  session_start();

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
                            <li><i class="fa fa-table" style="color: white;"></i><a href="#"><font color="white"><b>Jadwal Siswa</b></font></a></li>
                            <li><i class="fa fa-table" style="color: white;"></i><a href="#"><font color="white"><b>Jadwal Guru</b></font></a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th" style="color: white;"></i><font color="white"><b>Forms</b></font></a>
                        <ul class="sub-menu children dropdown-menu" style="background-color:#191970;">
                            <li><i class="menu-icon fa fa-th" style="color: white;"></i><a href="#"><font color="white"><b>Diskusi</b></font></a></li>
                            <li><i class="menu-icon fa fa-th" style="color: white;"></i><a href="#"><font color="white"><b>Kuesioner</b></font></a></li>
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
                  
               ?>    

               <h4><b><center> DATA SISWA SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br><center> <img src="../images/2.png" width="130px" height="130px"></center> <hr /><br>
     <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah Data Siswa   <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan Data Siswa</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="../config/tambah-siswa1.php" method="post">
  <div class="form-group">
    <label for="email">Nomor Induk Siswa:</label>
    <input type="text" class="form-control" id="nis" name="nis">
  </div>

  <div class="form-group">
    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>

   <div class="form-group">
    <label for="email">Kelas:</label>
    <input type="text" class="form-control" id="kls" name="kls">
  </div>

   <div class="form-group">
    <label for="email">Jenis Kelamin:</label>
    <input type="text" class="form-control" id="jk" name="jk">
  </div>
  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah Data Siswa</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

              
               <table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #191970;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nomor Induk Siswa</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>ID.Kelas</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Jenis Kelamin</center></b></font></th>
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>
  


        <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_siswa,nis,nama,id_kelas,jk FROM siswa where id_kelas='7-1' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['nis'].' <center></td>';
                        echo '<td> <center>'.$data['nama'].'<center></td>';
                        echo '<td> <center>'.$data['id_kelas'].'<center></td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                        echo '<td><a href="#" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="../config/delete.php?id='.$data['id_siswa'].' " onClick="return confirm(\'Apakah user '.$data['nis'].' ingin dihapus ?\'" i class="fa fa-trash"></i></a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>

<ul class="pagination">

  <li class="page-item"><a class="page-link" href="admin.php?halaman=siswa">1</a></li>
  <li class="page-item"><a class="page-link" href="../admin/siswa2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4</a></li>
  <li class="page-item"><a class="page-link" href="#">5</a></li>
   <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
     <li class="page-item"><a class="page-link" href="#">8</a></li>
      <li class="page-item"><a class="page-link" href="#">9</a></li>
       <li class="page-item"><a class="page-link" href="#">10</a></li>
        <li class="page-item"><a class="page-link" href="#">11</a></li>
         <li class="page-item"><a class="page-link" href="#">12</a></li>
           <li class="page-item"><a class="page-link" href="#">13</a></li>
             <li class="page-item"><a class="page-link" href="#">14</a></li>
               <li class="page-item"><a class="page-link" href="#">15</a></li>
 
</ul>
  





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
