<center><h3>PERIKSA TUGAS </h3></center><br>
  <center><img src="../images/2.png" width="130px" height="130px"></center><br>
<h4><b><center> SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b> <hr />

<div class="well well-sm"><b>Cek Tugas Siswa</b></div>

<form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Kelas " style="width: 350px;">
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
     <th><b><center>Mapel</center></b></th>
      <th><b><center>Judul</center></b></th>
       <th><b><center>Tugas Ke</center></b></th>
        <th><b><center>Tanggal</center></b></th>
         <th><b><center>File</center></b></th>
      <th><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>


      	<?php
                
                include '../config/koneksi.php';
                
                if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $query = mysqli_query($konek, "SELECT nis,nama,id_kelas,mapel,judul,tugas_ke,tanggal,file FROM tugas where id_kelas AND mapel like '%".$cari."%'")or die(mysqli_error());     
                }else{


                $query  = mysqli_query($konek, "SELECT nis,nama,id_kelas,mapel,judul,tugas_ke,tanggal,file FROM tugas ")or die(mysqli_error($konek));
              }

                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['nis'].'</td>';
                        echo '<td> '.$data['nama'].'</td>';
                          echo '<td> '.$data['id_kelas'].'</td>';
                            echo '<td> '.$data['mapel'].'</td>';
                              echo '<td> '.$data['judul'].'</td>';
                                echo '<td> '.$data['tugas_ke'].'</td>';
                                  echo '<td> '.$data['tanggal'].'</td>';
                                    echo '<td> '.$data['file'].'</td>';
                         echo '<td><a href=""><center>Download</center></a></td>';
                      
                      
                      
                      
                      
                        

                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    


    ?>
       </table>
















<div class="services-w3layouts" id="services">
	<div class="container">	
		</div>
	</div>