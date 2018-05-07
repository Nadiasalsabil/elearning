<div class="row">
            <div class="col-12 grid-margin">
         <form class="forms-sample" form action="" method="POST">
                         
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Hari KBM" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-danger btn-xs">Cari Data</button>

      </form><br>

        	<div class="alert alert-danger">
  <img src="images/faces-clipart/pic-1.png">&nbsp;&nbsp;<strong>Jadwal KBM Siswa </strong>&nbsp; SMP Negeri 34 Bekasi 
</div>

 <a href="admin.php?halaman=tambahjadwalsiswa"><button type="button" class="btn btn-danger">Tambah Jadwal Siswa</button></a><br><br>

  <table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>Waktu</center></b></th>
     <th><b><center>Hari</center></b></th>
     <th><b><center>Mata Pelajaran</center></b></th>
     <th><b><center>Pengajar</center></b></th>
      <th><b><center>Kelas</center></b></th>
      <th colspan="2"><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>


       <?php

            include '../config/koneksi.php';


             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru,id_kelas FROM jadwal where hari like '%".$cari."%'")or die(mysqli_error());     
             }else{

            $query = mysqli_query($konek, "SELECT id_jadwal,waktu,hari,pelajaran,guru,id_kelas FROM jadwal")or die(mysqli_error());
          }
                   
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['waktu'].'</td>';
                        echo '<td> <center>'.$data['hari'].'<center></td>';
                        echo '<td> '.$data['pelajaran'].'</td>';
                        echo '<td><img src="images/faces-clipart/pic-1.png">&nbsp;&nbsp;'.$data['guru'].'</td>';
                         echo '<td> <center>'.$data['id_kelas'].' <center></td>';
                          
                      echo '<td><a href="editjadwalsiswa.php?id='.$data['id_jadwal'].'"><center><label class="badge badge-danger">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete5.php?id='.$data['id_jadwal'].' " onClick="return confirm(\'Apakah user '.$data['pelajaran'].' ingin dihapus ?\'"><center><label class="badge badge-warning">Delete</label></</a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    
              
                ?>
       </table>


              <div class="card">
                <div class="card-body">

</div>
</div>
</div>
</div>