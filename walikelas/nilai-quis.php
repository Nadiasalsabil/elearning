<?php
    error_reporting(0);    
?>
<center><i class="fa fa-wpforms" aria-hidden="false" style="font-size:70px" ></i></center><br>
<center><h3>LAPORAN NILAI QUIS ONLINE  SISWA</h3></center>
<center><h3>SMP NEGERI 34 BEKASI</h3>
<p><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></p></center><hr />


<div class="well well-sm" style="background-color: light grey;"><b>Nilai Quis Online  </b></div>
  
  <form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Latihan Online " style="width: 350px;">
                        </div>

                       
<button type="submit" class="btn btn-info btn-xs">Cari Data</button>

      </form><br>
 
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
       
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
          <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
         <th style="background-color:   #1ca0de;"><font color="white"><b><center>Latihan Online</center></b></font></th>
       
           <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nilai</center></b></font></th>

         
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
                $query  = mysqli_query($konek, "SELECT login.username, nilaiquis.nis,nilaiquis.kelas, nilaiquis.nama,nilaiquis.latihan, nilaiquis.nilai FROM nilaiquis, login WHERE nilaiquis.latihan like '%".$cari."%' AND nilaiquis.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek)); 
                }else{


                    $query  = mysqli_query($konek, "SELECT login.username, nilaiquis.nis,nilaiquis.kelas, nilaiquis.nama,nilaiquis.latihan, nilaiquis.nilai FROM nilaiquis, login WHERE  nilaiquis.kelas = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                      } 
                                    
                      
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                            echo '<td> <center>'.$data['latihan'].'<center></td>';
                            echo '<td> <center>'.$data['nilai'].'<center></td>';
                                    
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  
                  

            ?>
</table>


<div class="services-w3layouts" id="services">
    <div class="container"> 

</div>
</div>