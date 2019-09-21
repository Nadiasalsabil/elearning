<?php
    error_reporting(0);    
?>
<div class="services-w3layouts" id="services">
	<div class="container">	
<center><i class="fa fa-book" aria-hidden="false" style="font-size:70px" ></i></center><br>
<h5 class="title-w3">BAHASA INDONESIA</h5><hr />

<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">
<div class="well well-sm"><b>Download Materi / Soal</b></div>



<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>No</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Judul</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Bab</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Tanggal</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>File</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Action</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
			

            $query = mysqli_query($konek, "SELECT id,mapel,judul,bab,tanggal,file FROM materi where id_kelas='7-1' AND mapel='Bahasa Indonesia' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['mapel'].' <center></td>';
                        echo '<td> <center>'.$data['judul'].'<center></td>';
                        echo '<td> <center>'.$data['bab'].'<center></td>';
                        echo '<td> <center>'.$data['tanggal'].' <center></td>';
                        echo '<td> <center> '.$data['file'].'<center></td>';
                        echo '<td><a href="../config/simpan71.php?id='.$data['id'].'"><center>Download File</center></a></td>';

                        
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>
</div>
</div><br><hr />




<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">
<div class="well well-sm"><b>Keterangan Paket Soal</b></div>

<table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>SOAL</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>PAKET</center></b></font></th>
       

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, paket_soal.nis,paket_soal.soal,paket_soal.paket FROM paket_soal, login WHERE paket_soal.mapel='Bahasa Indonesia' AND paket_soal.nis = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Belum ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['soal'].'<center></td>';
                            echo '<td> <center>'.$data['paket'].'<center></td>';
                            
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>
</div>
</div>
</div><br><hr />














<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">

<div class="well well-sm">Quiz / Test</div>

 <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:#1ca0de;"><font color="white"><b><center>Latihan</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
        
        
        
          <th colspan="2" style="background-color:#1ca0de;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>



    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';
           
            $_SESSION['username'];

            

            $query = mysqli_query($konek, "SELECT id_tq,latihan,id_kelas FROM topik_quis where id_kelas='7-1' AND mapel='Bahasa Indonesia'")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['latihan'].' <center></td>';
                        echo '<td> <center>'.$data['id_kelas'].'<center></td>';
                   
                      
                        if($data['latihan'] == 'Latihan Soal Bahasa Indonesia 1'){
                          $cekBIndo1 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo1 = mysqli_num_rows($cekBIndo1);
                          if($dataCekBIndo1 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 1&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</font></center></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 2&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</font></center></a></td>';
                          }
                      }

                         if($data['latihan'] == 'Latihan Soal Bahasa Indonesia 2'){
                          $cekBIndo2 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo2 = mysqli_num_rows($cekBIndo2);
                          if($dataCekBIndo2 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 2&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</center></font></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 2&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</center></font></a></td>';
                          }
                      }

                      if($data['latihan'] == 'Latihan Soal Bahasa Indonesia 3'){
                          $cekBIndo3 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo3 = mysqli_num_rows($cekBIndo3);
                          if($dataCekBIndo3 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</font></center></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</font></center></a></td>';
                          }
                      }

                     if($data['latihan'] == 'Latihan Soal Bahasa Indonesia 4'){
                          $cekBIndo4 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo4 = mysqli_num_rows($cekBIndo4);
                          if($dataCekBIndo4 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</font></center></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</font></center></a></td>';
                          }
                      }

                     if($data['latihan'] == 'Latihan Soal Bahasa Indonesia 5'){
                          $cekBIndo5 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo5 = mysqli_num_rows($cekBIndo3);
                          if($dataCekBIndo5 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</font></center></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</font></center></a></td>';
                          }
                      }



                      if($data['latihan'] == 'Latihan Soal Bahasa Indonesia Akhir'){
                          $cekBIndo6 = mysqli_query($konek, "SELECT * FROM statussoal where modul_exam='" . $data['id_tq'] . "' AND status=1");
                          $dataCekBIndo6 = mysqli_num_rows($cekBIndo3);
                          if($dataCekBIndo6 > 0) {
                            echo '<td><center><font color="blue">Telah Dikerjakan.</center></font></td>';
                          }
                          else {
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">A</font></center></a></td>';
                            echo '<td><a href="soalindo1.php?refresh=1&halaman=Latihan Soal Bahasa Indonesia 3&id_tq=' . $data['id_tq'] . '"><center><font color="red">B</font></center></a></td>';
                          }
                      }

                       
                   

                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>
</div>
</div><br>


</div>
</div>
</div>
</div>