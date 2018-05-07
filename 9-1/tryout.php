<div class="services-w3layouts" id="services">
	<div class="container">	
<center><i class="fa fa-book" aria-hidden="false" style="font-size:70px" ></i></center><br>
<h5 class="title-w3">LATIHAN SOAL TRYOUT UN</h5><hr />


<div class="well well-sm">Quiz / Test TRYOUT</div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:#1ca0de;"><font color="white"><b><center>Latihan</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
        
        
        
          <th colspan="2" style="background-color: #1ca0de;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>
  


        <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_tq,latihan,id_kelas FROM topik_quis where mapel='Tryout' AND id_kelas='9-1' ")or die(mysqli_error($konek));
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
                     
  

                       if($data['latihan'] == 'Latihan Soal Tryout 1 '){
                        echo '<td><a href="soalindo1.php?halaman=Latihan Soal Tryout 1 "><center>Kerjakan</center></a></td>';
                      }

                       if($data['latihan'] == 'Latihan Soal Tryout 2'){
                        echo '<td><a href="soalindo1.php?halaman=Latihan Soal Tryout 2"><center>Kerjakan</center></a></td>';
                      }

                       if($data['latihan'] == 'Latihan Soal Tryout 3'){
                        echo '<td><a href="soalindo1.php?halaman=Latihan Soal Tryout 3"><center>Kerjakan</center></a></td>';
                      }

                       if($data['latihan'] == 'Latihan Soal Tryout 4'){
                        echo '<td><a href="soalindo1.php?halaman=Latihan Soal Tryout 4"><center>Kerjakan</center></a></td>';
                      }

                       if($data['latihan'] == 'Latihan Soal Tryout 5'){
                        echo '<td><a href="soalindo1.php?halaman=Latihan Soal Tryout 5 "><center>Kerjakan</center></a></td>';
                      }

                     

                       
                   

                   
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>




</div>
</div>