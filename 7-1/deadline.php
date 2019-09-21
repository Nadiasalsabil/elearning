<div class="services-w3layouts" id="services">
  <div class="container"> 
 <center><i class="fa fa-mortar-board" style="font-size:48px;color:#1ca0de"></i></center><br>
      <center> <h2><font color="#1ca0de">UPLOAD TUGAS <br></font></h2></center>
    
          <center><font color="#1ca0de"> <h2>SMP Negeri 34 Bekasi </h2></font></center>
          <center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></center><br>
<hr /><br>

<div class="well well-sm">TUGAS SISWA</div>
<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">


      <table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Nama Guru</center></b></font></th>
        <th style="background-color: #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Pelajaran</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Deskripsi</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Deadline</center></b></font></th>
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Alert Deadline</center></b></font></th>
         
         <th style="background-color: #1ca0de;"><font color="white"><b><center>Action</center></b></font></th>

        
      </tr>
    </thead>
    </tbody>
  


        <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT * FROM deadline_tugas where kelas='7-1' ")or die(mysqli_error($konek));
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['nama'].' <center></td>';
                        echo '<td> <center>'.$data['kelas'].'<center></td>';
                        echo '<td> <center>'.$data['mapel'].'<center></td>';
                        echo '<td> <center>'.$data['deskripsi_tugas'].' <center></td>';
                       
                        echo '<td> <center>'.$data['deadline'].' <center></td>';

                 

                    $deadline1 = $data['deadline'];
                    $now = date("y-m-d");
                    $batas = strtotime($deadline1) - strtotime($now);

                    



                        if($batas/(24*60*60)<1) {
                            echo'<td><center><font color = "red"> hari berakhir </font></center> </td>';
                            echo '<td> <center><font color = "blue"> waktu habis </font></a ><center></td>';
                          }

                          else{
                            echo"<td><center>".($batas/(60*60)*100)." hari lagi</center></td>";
                            echo '<td> <center><a href="7-1.php?halaman=tugas1"> <font color = "red">kerjakan </font></a> <center></td>';
                          }
                          

                         
                      
                        
                     
                     
                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>



  
</div>
</div>

</div>

</div>
</div>