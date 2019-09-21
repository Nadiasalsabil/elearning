<?php
    error_reporting(0);    
?>
<br><br>

<center><h3>CEK SOAL LATIHAN ONLINE </h3></center><br>
  <center><img src="../images/2.png" width="130px" height="130px"></center><br>
<h4><b><center> SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b> <hr />

<div class="services-w3layouts" id="services">
  <div class="container"> 

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
       
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Mapel</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Soal</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>a</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>b</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>c</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>d</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>e</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Kunci Jawaban</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>gambar</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>tanggal</center></b></font></th>
        
         <th colspan="2" style="background-color:  #1ca0de;"><font color="white"><b><center>Action</center></b></font></th>
        
        
        
        
        

         
      </tr>
    </thead>
    <tbody>
  

            <?php

                session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                    


                    $query  = mysqli_query($konek, "SELECT login.username, soal.id_soal,soal.nip, soal.kelas,soal.mapel, soal.soal, soal.a, soal.b,soal.c,soal.d,soal.e,soal.kunci_jawaban,soal.gambar,soal.tanggal,soal.aktif FROM soal, login WHERE soal.nip = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                           
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['soal'].'<center></td>';
                            echo '<td> <center>'.$data['a'].' <center></td>';
                            echo '<td> <center>'.$data['b'].' <center></td>';
                            echo '<td> <center>'.$data['c'].' <center></td>';
                            echo '<td> <center>'.$data['d'].' <center></td>';
                            echo '<td> <center>'.$data['e'].' <center></td>';
                            echo '<td> <center>'.$data['kunci_jawaban'].' <center></td>';
                            echo '<td> <center>'.$data['gambar'].' <center></td>';
                          
                             echo '<td><a href="editsoal1.php?id='.$data['id_soal'].'"><center>Ubah</center></a></td>';
                            echo '<td><a href=../config/hapussoal.php?id='.$data['id_soal'].' " onClick="return confirm(\'Apakah user '.$data['nip'].' ingin dihapus ?\'"><center>Hapus</center></a></td>';
                                        
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
          </tbody>
</table>




</div>
</div>
