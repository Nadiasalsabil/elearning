
<?php
    error_reporting(0);    
?>
<center><i class="fa fa-wpforms" aria-hidden="false" style="font-size:70px" ></i></center><br>
<center><h3>LAPORAN NILAI SISWA</h3></center>
<center><h3>SMP NEGERI 34 BEKASI</h3>
<p><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></p></center><hr />


<div class="well well-sm" style="background-color: yellow;">Nilai Pokok Bahasa Indonesia</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
       
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata   FROM nilai, login WHERE nilai.mapel = 'Bahasa Indonesia' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

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
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                              echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>

<div class="well well-sm" style="background-color: yellow;">Nilai Pokok Matematika</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
      
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.kelas,nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas,  nilai.rata  FROM nilai, login WHERE nilai.mapel = 'Matematika' AND nilai.smt='1' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

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
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                              echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>

<div class="well well-sm" style="background-color: yellow;">Nilai Pokok Ilmu Pengetahuan Alam (IPA)</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
       
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
           <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>

        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.nis,nilai.kelas, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata  FROM nilai, login WHERE nilai.mapel = 'IPA' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="10" align="center">Belum ada Nilai!</center></td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                             echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>

<div class="well well-sm" style="background-color: yellow;">Nilai Pokok Ilmu Pengetahuan Sosial</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>

        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.kelas,nilai.nis, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata FROM nilai, login WHERE nilai.mapel = 'IPS' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="10" align="center">belum Ada Nilai!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                               echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>

<div class="well well-sm" style="background-color: yellow;">Bahasa Inggris</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>

        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.kelas,nilai.nis, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata FROM nilai, login WHERE nilai.mapel = 'Bahasa Inggris' AND nilai.smt='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="10" align="center">belum Ada Nilai!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                              echo '<td> <center>'.$data['rata'].'<center></td>';
  
                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>




<div class="well well-sm" style="background-color: yellow;">Nilai Pendidikan Kewarganegaraan</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>rata</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.kelas,nilai.nis, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata  FROM nilai, login WHERE nilai.mapel = 'PKN' AND nilai.rata='1' AND  nilai.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="10" align="center">belum Ada Nilai!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['kelas'].'<center></td>';
                               echo '<td> <center>'.$data['rata'].'<center></td>';

                            echo '<td> <center>'.$data['nama'].'<center></td>';
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
                  }

                  

            ?>
</table>







<div class="services-w3layouts" id="services">
    <div class="container"> 



</div>
</div>