
<?php
    error_reporting(0);    
?>
<center><i class="fa fa-wpforms" aria-hidden="false" style="font-size:70px" ></i></center><br>
<center><h3>LAPORAN NILAI BAHASA INDONESIA</h3></center>
<center><h3>SMP NEGERI 34 BEKASI</h3>
<p><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></p></center><hr />

<div class="panel panel-default">
  <div class="panel-heading" style="background-color: #D2691E;"><b> Nilai Bahasa Indonesia Semester I</div>
  <div class="panel-body">





    <form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Nilai Lebih Dari.... " style="width: 350px;">
                        </div>

                        
<button type="submit" class="btn btn-md" style="background-color: #D2691E;"><font color="white">Cari Data</font></button>

      </form><br>
<div class="well well-sm" style="background-color: #F5DEB3;"><b>Nilai Pokok Bahasa Indonesia Semester I</b></div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #D2691E;"><font color="white"><b><center>NO</center></b></font></th>
         <th style="background-color:   #D2691E;"><font color="white"><b><center>Nama Guru</center></b></font></th>
       
        <th style="background-color:   #D2691E;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #D2691E;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
          <th style="background-color:   #D2691E;"><font color="white"><b><center>Kelas</center></b></font></th>
          <th style="background-color:   #D2691E;"><font color="white"><b><center>Semester</center></b></font></th>
        
        <th style="background-color:  #D2691E;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #D2691E;"><font color="white"><b><center>Absen</center></b></font></th>
         <th style="background-color:  #D2691E;"><font color="white"><b><center>Tugas</center></b></font></th>
         <th style="background-color:  #D2691E;"><font color="white"><b><center>UTS</center></b></font></th>
         <th style="background-color:  #D2691E;"><font color="white"><b><center>UAS</center></b></font></th>
           <th style="background-color:  #D2691E;"><font color="white"><b><center>Nilai Rata-Rata</center></b></font></th>

         
      </tr>
    </thead>
    </tbody>
  

            <?php

                session_start();

               

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                
                    if(isset($_POST['cari'])){
                     $cari = $_POST['cari'];
               
              
                    $query  = mysqli_query($konek, "SELECT login.username, nilai.guru,nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata   FROM  nilai, login WHERE rata like '%".$cari."%' AND nilai.mapel='Bahasa Indonesia' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' Order By rata DESC")or die(mysqli_error($konek));
                  }else{

                    $query  = mysqli_query($konek, "SELECT login.username, nilai.guru,nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata   FROM  nilai, login WHERE nilai.mapel='Bahasa Indonesia' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' Order By rata DESC")or die(mysqli_error($konek));

                       }
                        
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['guru'].' <center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                              echo '<td> <center>'.$data['smt'].'<center></td>';
                           
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['absen'].'<center></td>';
                            echo '<td> <center>'.$data['tugas'].' <center></td>';
                            echo '<td> <center>'.$data['uts'].' <center></td>';
                            echo '<td> <center>'.$data['uas'].' <center></td>';
                            echo '<td> <center>'.$data['rata'].' <center></td>';             
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  

                  


            ?>
</table>


<div class="well well-sm" style="background-color: #F5DEB3;"><b>Rekap Nilai Bahasa Indonesia Semester I</b></div>




        <table class="table table-striped" >
    <thead>
      <tr>
         <th style="background-color: #D2691E;"><font color="white"><b><center>KKM </center></b></font></th>
        <th style="background-color: #D2691E;"><font color="white"><b><center>Nilai Rata-Rata </center></b></font></th>
         <th style="background-color:  #D2691E;" ><font color="white"><b><center>Nilai Tertinggi </center></b></font></th>
          <th style="background-color:  #D2691E;" ><font color="white"><b><center>Nilai Terendah </center></b></font></th>
        
         
      </tr>
    </thead>
    </tbody>
  

            <?php

                session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.nama, AVG(nilai.rata) As nilai_tinggi,MAX(nilai.rata) As nilai_max,MIN(nilai.rata) As nilai_min  FROM nilai, login WHERE nilai.mapel='Bahasa Indonesia' AND nilai.smt='1'  AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';

                             echo '<td> <center> 75  <center></td>';  
                            
                           
                            echo '<td> <center>'.$data['nilai_tinggi'].' <center></td>';  
                            
                            echo '<td> <center>'.$data['nilai_max'].' <center></td>'; 
                            
                            echo '<td> <center>'.$data['nilai_min'].' <center></td>';             
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table><hr /><hr />


</div>
</div><hr />









<div class="panel panel-default">
  <div class="panel-heading" style="background-color: #1ca0de;"><b><font color="white"> Nilai Bahasa Indonesia Semester II</font></b></div>
  <div class="panel-body">

    <form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="mencari" name="mencari" placeholder="Masukkan Nilai " style="width: 350px;">
                        </div>

                        
<button type="submit" class="btn btn-md" style="background-color: #1ca0de;"><font color="white">Cari Data</font></button>

      </form><br>


<div class="well well-sm" style="background-color: #ADD8E6;"><b>Nilai Pokok Bahasa Indonesia Semester II</b></div>
   
   

        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
       
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>
       
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Absen</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Tugas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>UTS</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>UAS</center></b></font></th>
           <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nilai Rata-Rata</center></b></font></th>

         
      </tr>
    </thead>
    </tbody>
  

            <?php

                session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                     if(isset($_POST['mencari'])){
                     $mencari = $_POST['mencari'];
               
              
                    $query  = mysqli_query($konek, "SELECT login.username, nilai.guru,nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata   FROM  nilai, login WHERE rata like '%".$mencari."%' AND nilai.mapel='Bahasa Indonesia' AND nilai.smt='2' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' Order By rata DESC")or die(mysqli_error($konek));
                  }else{


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.guru,nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata   FROM nilai, login WHERE nilai.mapel='Bahasa Indonesia' AND nilai.smt='2' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                      }
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['guru'].' <center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                              echo '<td> <center>'.$data['smt'].'<center></td>';
                           
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['absen'].'<center></td>';
                            echo '<td> <center>'.$data['tugas'].' <center></td>';
                            echo '<td> <center>'.$data['uts'].' <center></td>';
                            echo '<td> <center>'.$data['uas'].' <center></td>';
                            echo '<td> <center>'.$data['rata'].' <center></td>';             
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  

                  

            ?>
</table>

<div class="well well-sm" style="background-color: #ADD8E6;"><b>Nilai Rata-rata , Nilai Tertinggi dan Nilai Terendah dari Nilai Pokok Bahasa Indonesia Semester II</b></div>




        <table class="table table-striped" >
    <thead>
      <tr>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>KKM </center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nilai Rata-Rata </center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nilai Tertinggi </center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nilai Terendah </center></b></font></th>
        
         
      </tr>
    </thead>
    </tbody>
  

            <?php

                session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                    


                    $query  = mysqli_query($konek, "SELECT login.username, AVG(nilai.rata) As nilai_tinggi,MAX(nilai.rata) As nilai_max,MIN(nilai.rata) As nilai_min  FROM nilai, login WHERE nilai.mapel='Bahasa Indonesia' AND nilai.smt='2' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                             echo '<td> <center> 75  <center></td>';  
                            
                            echo '<td> <center>'.$data['nilai_tinggi'].' <center></td>';  
                            echo '<td> <center>'.$data['nilai_max'].' <center></td>'; 
                            echo '<td> <center>'.$data['nilai_min'].' <center></td>';             
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>
</div>
</div>

<div class="services-w3layouts" id="services">
    <div class="container"> 



</div>
</div>