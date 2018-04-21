<div class="content mt-3">

            <div class="col-sm-12">

<h4><b><center> JADWAL PELAJARAN SISWA SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br>
 <center> <img src="../images/2.png" width="130px" height="130px"></center> <hr /><br>
  <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah Jadwal Pelajaran Siswa   <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan  Jadwal Pelajaran Siswa</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="../config/tambah-jadwalguru.php" method="post">
  <div class="form-group">
    <label for="email">Waktu:</label>
    <input type="text" class="form-control" id="waktu" name="waktu" placeholder="07.00 - 07.40 WIB">
  </div>

  <div class="form-group">
      <label for="mapel">Hari:</label>
     <center><select size="1" class="form-control" id="hari" name="hari" >
      <option>Senin
        <option>Selasa
          <option>Rabu
            <option>Kamis
              <option>Jumat
      </select>
      </center>
      </div>

<div class="form-group">
      <label for="mapel">Mata Pelajaran:</label>
     <center><select size="1" class="form-control" id="mapel" name="mapel" >
     <option>Bahasa Indonesia
     <option>Bahasa Inggris
     <option>Matematika
      <option>Ilmu Pengetahuan Alam
      <option>Ilmu Pengetahuan Sosial
        <option>Pendidikan Kewarganegaraan
          <option>BK
            <option>SBK
                <option>Pendidikan Lingkungan Hidup
                    <option>Pendidikan Agama Islam
                        <option>Bahasa Sunda
                            <option>Prakarya
                              <option>Penjaskes
      </select>
      </center>
      </div>





  <div class="form-group">
    <label for="email">Nama Guru:</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>

   



  <div class="form-group">
      <label for="mapel">Kelas :</label>
     <center><select size="1" class="form-control" id="kelas" name="kelas" >
     <option>7-1
     <option>7-2
     <option>7-3
      <option>7-4
      <option>7-5
        <option>8-1
          <option>8-2
            <option>8-3
              <option>8-4
                <option>8-5
                  <option>9-1
                    <option>9-2
                      <option>9-3
                        <option>9-4
                          <option>9-5
      </select>
      </center>
      </div>

 
 

 


  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah Jadwal Pelajaran Siswa</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>






 <table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #191970;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Waktu / Jam</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Nama Guru</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Kelas</center></b></font></th>
        
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>
  


        <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru,id_kelas FROM jadwal")or die(mysqli_error());
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
                         echo '<td> <center>'.$data['id_kelas'].' <center></td>';
                          
                        echo '<td><a href="#" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="../config/delete-jadwal.php?id='.$data['id_jadwal'].' " onClick="return confirm(\'Apakah user '.$data['pelajaran'].' ingin dihapus ?\'" i class="fa fa-trash"></i></a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>


  


     </div>
            </div>