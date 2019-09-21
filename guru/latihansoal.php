<center><h3>PERIKSA NILAI LATIHAN SOAL ONLINE </h3></center><br>
  <center><img src="../images/2.png" width="130px" height="130px"></center><br>
<h4><b><center> SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b> <hr />

<div class="well well-sm"><b>Cek Nilai Latihan Soal Online</b></div>

<form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan kata kunci " style="width: 350px;">
                        </div>

                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="mencari" name="mencari" placeholder="Masukkan Kelas " style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-primary btn-xs">Cari Data</button>

      </form><br>



 <table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>NIS</center></b></th>
     <th><b><center>Nama Siswa</center></b></th>
     <th><b><center>Kelas</center></b></th>
     <th><b><center>Latihan</center></b></th>
      <th><b><center>Nilai</center></b></th>
      
   
      </tr>
      </thead>
      <tbody>


      	<?php
                
                include '../config/koneksi.php';
                
                if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $a = $_POST['mencari'];
                $query = mysqli_query($konek, "SELECT id_quis,nis,nama,kelas,latihan,nilai FROM nilaiquis where nis like '%".$cari."%' OR nama like '%".$cari."%' OR latihan like '%".$cari."%' OR nilai like '%".$cari."%'  AND latihan like '%".$a."%'")or die(mysqli_error());     
                }else{


                $query  = mysqli_query($konek, "SELECT id_quis,nis,nama,kelas,latihan,nilai FROM nilaiquis ORDER BY kelas Desc ")or die(mysqli_error($konek));
              }

                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['nis'].'</td>';
                        echo '<td> '.$data['nama'].'</td>';
                        echo '<td> '.$data['kelas'].'</td>';
                        echo '<td> '.$data['latihan'].'</td>';
                         echo '<td> '.$data['nilai'].'</td>';
                      
                      
                      
                      
                      
                      
                        

                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    


    ?>
  </tbody>
       </table>
















<div class="services-w3layouts" id="services">
	<div class="container">	
		</div>
	</div>