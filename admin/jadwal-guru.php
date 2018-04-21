<div class="content mt-3">

            <div class="col-sm-12">

<h4><b><center> JADWAL GURU SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br>
 <center> <img src="../images/2.png" width="130px" height="130px"></center> <hr /><br>
  <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah Jadwal Guru   <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan  Jadwal guru</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="../config/tambah-jadwalguru.php" method="post">
  <div class="form-group">
    <label for="email">Nomor Induk Pegawai:</label>
    <input type="text" class="form-control" id="nip" name="nip">
  </div>

  <div class="form-group">
    <label for="email">Nama Guru:</label>
    <input type="text" class="form-control" id="nama" name="nama">
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
      <label for="mapel">Kelas Mengajar:</label>
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
      <label for="mapel">Waktu KBM:</label>
     <center><select size="1" class="form-control" id="waktu" name="waktu" >
     <option>07:00:00.000000
      <option>07:20:00.000000
     <option>07:40:00.000000
      <option>08:20:00.000000
        <option>09:00:00.000000
          <option>10:10:00.000000
            <option>10:50:00.000000
              <option>11:30:00.000000
                 <option>11:50:00.000000
            
                <option>12:10:00.000000
                   <option>12:30:00.000000
      </select>
      </center>
      </div>


  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah Jadwal KBM Guru</button>
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
        <th style="background-color: #191970;"><font color="white"><b><center>Nomor Induk Pegawai</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>MAPEL</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Kelas</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Hari</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Waktu</center></b></font></th>
         
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>
  


        <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id,nip,nama,mapel,kelas,hari,waktu FROM jadwal_guru ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['nip'].' <center></td>';
                        echo '<td> <center>'.$data['nama'].'<center></td>';
                        echo '<td> <center>'.$data['mapel'].'<center></td>';
                        echo '<td> <center>'.$data['kelas'].' <center></td>';
                         echo '<td> <center>'.$data['hari'].' <center></td>';
                          echo '<td> <center>'.$data['waktu'].' <center></td>';
                        echo '<td><a href="#" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="../config/delete1.php?id='.$data['id'].' " onClick="return confirm(\'Apakah user '.$data['nip'].' ingin dihapus ?\'" i class="fa fa-trash"></i></a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>


  


     </div>
            </div>