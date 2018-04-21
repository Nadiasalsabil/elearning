<div class="content mt-3">

            <div class="col-sm-12">

<h4><b><center> DATA GURU SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br>
 <center> <img src="../images/2.png" width="130px" height="130px"></center> <hr />

 <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah Guru    <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan Data Guru</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="../config/tambahguru.php" method="post">
  <div class="form-group">
    <label for="email">Nomor Induk Pegawai:</label>
    <input type="text" class="form-control" id="nip" name="nip">
  </div>

  <div class="form-group">
    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>

   <div class="form-group">
    <label for="email">Jabatan:</label>
    <input type="text" class="form-control" id="jbt" name="jbt">
  </div>

   <div class="form-group">
    <label for="email">Jenis Kelamin:</label>
    <input type="text" class="form-control" id="jk" name="jk">
  </div>
  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah Guru</button>
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
         <th style="background-color: #191970;"><font color="white"><b><center>Jabatan</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Jenis Kelamin</center></b></font></th>
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>

     <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_guru,nip,nama,jabatan,jk FROM guru")or die(mysqli_error());
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
                        echo '<td> <center>'.$data['jabatan'].'<center></td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                        echo '<td><a href="#" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="#" i class="fa fa-trash"></i></a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
  


</table>


  


     </div>
            </div>