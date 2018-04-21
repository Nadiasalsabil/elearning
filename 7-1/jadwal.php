


<center><h3>JADWAL PELAJARAN VIII - 1 </h3></center><br>
  <center><img src="../images/2.png" width="130px" height="130px"></center><br>
<h4><b><center>  SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b> <hr />
<div class="services-w3layouts" id="services">
  <div class="container"> 

<div class="well well-sm" style="background-color:yellow;" ><b>Jadwal Pelajaran Hari Senin</b></div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Guru</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
			

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru FROM jadwal where id_kelas='7-1' AND hari='senin' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> <center>'.$data['pelajaran'].'<center></td>';
                        echo '<td> <center>'.$data['guru'].' <center></td>';
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>


<div class="well well-sm" style="background-color:yellow;"><b>Jadwal Pelajaran Hari Selasa</b></div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Guru</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru FROM jadwal where id_kelas='7-1' AND hari='selasa' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> <center>'.$data['pelajaran'].'<center></td>';
                        echo '<td> <center>'.$data['guru'].' <center></td>';
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>

<div class="well well-sm" style="background-color:yellow;" ><b>Jadwal Pelajaran Hari Rabu</b></div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Guru</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru FROM jadwal where id_kelas='7-1' AND hari='rabu' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> <center>'.$data['pelajaran'].'<center></td>';
                        echo '<td> <center>'.$data['guru'].' <center></td>';
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>

<div class="well well-sm" style="background-color:yellow;" ><b>Jadwal Pelajaran Hari Kamis</b></div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Guru</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru FROM jadwal where id_kelas='7-1' AND hari='kamis' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> <center>'.$data['pelajaran'].'<center></td>';
                        echo '<td> <center>'.$data['guru'].' <center></td>';
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>


<div class="well well-sm" style="background-color:yellow;" ><b>Jadwal Pelajaran Hari Jumat</b></div>

<table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Waktu</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Guru</center></b></font></th>
        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru FROM jadwal where id_kelas='7-1' AND hari='jumat' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> <center>'.$data['pelajaran'].'<center></td>';
                        echo '<td> <center>'.$data['guru'].' <center></td>';
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>






	</div>
	</div>