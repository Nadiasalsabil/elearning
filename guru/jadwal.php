<?php
    error_reporting(0);    
?>

<center><h3>JADWAL MENGAJAR </h3></center><br>
  <center><img src="../images/2.png" width="130px" height="130px"></center><br>
<h4><b><center> SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b> <hr />

<div class="services-w3layouts" id="services">
	<div class="container">	

<div class="well well-sm"><b>Jadwal Kegiatan Belajar Mengajar Hari Senin</b></div>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, jadwal_guru.nip, jadwal_guru.nama,jadwal_guru.mapel, jadwal_guru.kelas, jadwal_guru.hari, jadwal_guru.waktu FROM jadwal_guru, login WHERE jadwal_guru.hari = 'senin' AND jadwal_guru.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nip'].' <center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['hari'].' <center></td>';
                            echo '<td> <center>'.$data['waktu'].' <center></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>

<div class="well well-sm"><b>Jadwal Kegiatan Belajar Mengajar Hari Selasa</b></div>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, jadwal_guru.nip, jadwal_guru.nama,jadwal_guru.mapel, jadwal_guru.kelas, jadwal_guru.hari, jadwal_guru.waktu FROM jadwal_guru, login WHERE jadwal_guru.hari = 'selasa' AND jadwal_guru.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada Jadwal!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nip'].' <center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['hari'].' <center></td>';
                            echo '<td> <center>'.$data['waktu'].' <center></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>

<div class="well well-sm"><b>Jadwal Kegiatan Belajar Mengajar Hari Rabu</b></div>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, jadwal_guru.nip, jadwal_guru.nama,jadwal_guru.mapel, jadwal_guru.kelas, jadwal_guru.hari, jadwal_guru.waktu FROM jadwal_guru, login WHERE jadwal_guru.hari = 'rabu' AND jadwal_guru.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada Jadwal!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nip'].' <center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['hari'].' <center></td>';
                            echo '<td> <center>'.$data['waktu'].' <center></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>
<div class="well well-sm"><b>Jadwal Kegiatan Belajar Mengajar Hari Kamis</b></div>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, jadwal_guru.nip, jadwal_guru.nama,jadwal_guru.mapel, jadwal_guru.kelas, jadwal_guru.hari, jadwal_guru.waktu FROM jadwal_guru, login WHERE jadwal_guru.hari = 'kamis' AND jadwal_guru.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada Jadwal!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nip'].' <center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['hari'].' <center></td>';
                            echo '<td> <center>'.$data['waktu'].' <center></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>

<div class="well well-sm"><b>Jadwal Kegiatan Belajar Mengajar Hari Jumat</b></div>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, jadwal_guru.nip, jadwal_guru.nama,jadwal_guru.mapel, jadwal_guru.kelas, jadwal_guru.hari, jadwal_guru.waktu FROM jadwal_guru, login WHERE jadwal_guru.hari = 'jumat' AND jadwal_guru.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada Jadwal!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nip'].' <center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['hari'].' <center></td>';
                            echo '<td> <center>'.$data['waktu'].' <center></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>


</div>
</div>