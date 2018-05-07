 <div class="row">
            <div class="col-12 grid-margin">
            	 <div class="form-group">
                <form class="forms-sample" form action="" method="POST">
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan NIP Guru" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-info btn-xs">Cari Data</button>

      </form><br><br>
      <div class="alert alert-info">
  <img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon">&nbsp;<strong>Jadwal Guru</strong> SMP Negeri 34 Bekasi
</div>
<a href="admin.php?halaman=tambahjadwalguru"><button type="button" class="btn btn-info">Tambah Jadwal Guru </button></a><br><br>

  <table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>NIP</center></b></th>
     <th><b><center>Nama</center></b></th>
     <th><b><center>Mata Pelajaran</center></b></th>
     <th><b><center>Kelas</center></b></th>
     <th><b><center>Hari</center></b></th>
     <th><b><center>Jam</center></b></th>
      <th colspan="2"><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>

        <?php

            include '../config/koneksi.php';


             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id,nip,nama,mapel,kelas,hari,waktu FROM jadwal_guru where nip like '%".$cari."%'")or die(mysqli_error());     
             }else{



            $query = mysqli_query($konek, "SELECT id,nip,nama,mapel,kelas,hari,waktu FROM jadwal_guru ")or die(mysqli_error());
          }
                 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['nip'].' </td>';
                        echo '<td><img src="images/faces-clipart/pic-2.png">&nbsp;&nbsp; '.$data['nama'].'</td>';
                        echo '<td> '.$data['mapel'].'</td>';
                        echo '<td> <center>'.$data['kelas'].' <center></td>';
                         echo '<td> <center>'.$data['hari'].' <center></td>';
                          echo '<td> '.$data['waktu'].'</td>';
                        echo '<td><a href="editjadwalguru.php?id='.$data['id'].'"><center><label class="badge badge-primary">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete4.php?id='.$data['id'].' " onClick="return confirm(\'Apakah user '.$data['nip'].' ingin dihapus ?\'"><center><label class="badge badge-success">Delete</label></</a></td>';
                       
                       
                   
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