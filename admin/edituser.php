<?php
  
  include '../config/koneksi.php';

  session_start();

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "admin";

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
       SMP NEGERI 34 BEKASI
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="images/faces/me.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Nadia Salsabil</p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">SMP N 34 Bekasi</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="admin.php?halaman=datauser"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Data User</span></a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php?halaman=datasiswa"><img class="menu-icon" src="images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Data Siswa</span></a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php?halaman=dataguru"><img class="menu-icon" src="images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Data Guru</span></a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php?halaman=jadwalguru"><img class="menu-icon" src="images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Jadwal Guru</span></a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php?halaman=jadwalsiswa"><img class="menu-icon" src="images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Jadwal Siswa</span></a></li>
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
                <p>Selamat Datang dihalaman Admin SMP Negeri 34 Bekasi</p>
               
               
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics" style="background-color: #1ca0de;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                       <p class="card-text text-right"><font color="white">Halaman ADMIN </font></p>
                      <div class="fluid-container">
                         <h3 class="card-title font-weight-bold text-right mb-0"><font color="white">SMP Negeri 34 Bekasi </font></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <b><font color="white"><center><a href="admin.php?halaman=datauser"><font color="white">Data User </font> </a> , <a href="admin.php?halaman=datasiswa"><font color="white"> Siswa </font> </a> dan <a href="admin.php?halaman=dataguru"> <font color="white"> Guru </font> </a> SMP Negeri 34 Bekasi</font></b></center>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics" style="background-color: orange;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right"><font color="white">Halaman ADMIN </font></p>
                      <div class="fluid-container">
                       <h3 class="card-title font-weight-bold text-right mb-0"><font color="white">SMP Negeri 34 Bekasi </font></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                     <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <b><font color="white"><center><a href="admin.php?halaman=jadwalsiswa"><font color="white">Jadwal Kegiatan Belajar Siswa </font></a>SMP Negeri 34 Bekasi</font></b></center>
                  </p>
                </div>
              </div>
            </div>
           
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics" style="background-color: salmon;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right"><font color="white">Halaman ADMIN </font></p>
                      <div class="fluid-container">
                       <h3 class="card-title font-weight-bold text-right mb-0"><font color="white">SMP Negeri 34 Bekasi </font></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <b><font color="white"><center><a href="admin.php?halaman=jadwalguru"><font color="white">Jadwal Kegiatan Belajar Mengajar Guru </font></a> SMP Negeri 34 Bekasi</font></b></center>
                  </p>
                </div>
              </div>
            </div>
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics" style="background-color: green;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right"><font color="white">Halaman ADMIN </font></p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0"><font color="white">SMP Negeri 34 Bekasi </font></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i><a href="../config/logout.php" > <font color="white">Logout  </font></a>
                  </p>
                </div>
              </div>
            </div>




          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                 
                 <div class="alert alert-success">
 				 <img src="images/faces-clipart/pic-3.png">&nbsp;&nbsp;<strong>Edit Data User</strong>&nbsp; SMP Negeri 34 Bekasi 
				</div>

				<?php
include '../config/koneksi.php';

		

$edit="SELECT * FROM login WHERE id='$_GET[id]'";
$hasil=mysqli_query($konek,$edit)or die(mysqli_error($konek));
$data=mysqli_fetch_array($hasil);
?>

<form  class="forms-sample" action="../config/updateuser.php" method="post">
	  <div class="form-group row">
	  	 <input type="hidden" class="form-control" id="id" name="id" value=<?php echo $data['id']; ?>>
	  	</div>

                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NIS / NIP</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nis" name="nis" value=<?php echo $data['nis'];?>>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="user" name="user" value=<?php echo $data['username'];?>>

                          </div>
                        </div>

                          <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="pwd" name="pwd" value=<?php echo $data['password'];?>>
                          </div>
                        </div>
                         
                          <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Level</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="level" name="level" value=<?php echo $data['level'];?>>
                          </div>
                        </div>
                         
                          <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Kelas</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="kls" name="kls" value=<?php echo $data['id_kelas'];?>>
                          </div>
                        </div>

                         <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Batas Login</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="bl" name="bl" value=<?php echo $data['batas_login'];?>>
                          </div>
                        </div>
                         
                            <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Blokir</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="blok" name="blok" value=<?php echo $data['blokir'];?>>
                          </div>
                        </div>
                         
                          <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="no" name="no" value=<?php echo $data['no'];?>>
                          </div>
                        </div>
                         
                         
                         

                       

                        <button type="submit" class="btn btn-success mr-2">Update</button>
                       
                      </form>
<?php 
 ?>



                  <?php
              if ($halaman=='datauser')
              include 'datauser.php';

            if ($halaman=='datasiswa')
              include 'datasiswa.php';

              if ($halaman=='dataguru')
              include 'dataguru.php';

            if ($halaman=='jadwalguru')
              include 'jadwalguru.php';

             if ($halaman=='jadwalsiswa')
              include 'jadwalsiswa.php';

             if ($halaman=='tambahdatasiswa')
              include 'tambahsiswa.php';

             if ($halaman=='tambahdataguru')
              include 'tambahguru.php';

              if ($halaman=='tambahdatauser')
              include 'tambahuser.php';

             if ($halaman=='tambahjadwalguru')
              include 'tambahjadwalguru.php';

              if ($halaman=='tambahjadwalsiswa')
              include 'tambahjadwalsiswa.php';
               

         







                ?>

                </div>
              </div>
            </div>
          </div>
          
         
                   
          
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Admindashboard</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Nadia Salsabil <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>