 <div class="row">
            <div class="col-12 grid-margin">
            	 <div class="form-group">
                <form class="forms-sample" form action="" method="POST">
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Cari Data" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-primary btn-xs">Cari Data</button>

      </form><br><br>
      <div class="alert alert-primary">
  <img class="menu-icon" src="images/menu_icons/06.png" alt="menu icon">&nbsp;<strong>Jadwal Tryout </strong> SMP Negeri 34 Bekasi
</div>
<a href="admin.php?halaman=tambahjadwaltryout"><button type="button" class="btn btn-primary">Tambah Jadwal Tryout </button></a><br><br>

  <table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>Tanggal</center></b></th>
    
     <th><b><center>Mata Pelajaran</center></b></th>
     <th><b><center>Tryout Ke</center></b></th>
     
      <th colspan="2"><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>

        <?php

            include '../config/koneksi.php';


             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id,tanggal,mapel,tryoutke FROM jadwal_tryout where tanggal like '%".$cari."%' OR  mapel like '%".$cari."%' OR  tryoutke like '%".$cari."%'")or die(mysqli_error());     
             }else{



            $query = mysqli_query($konek, "SELECT id,tanggal,mapel,tryoutke FROM jadwal_tryout ")or die(mysqli_error());
          }
                 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['tanggal'].' </td>';
                      
                      
                        echo '<td> <center>'.$data['mapel'].' <center></td>';
                         echo '<td> <center>'.$data['tryoutke'].' <center></td>';
                        
                        echo '<td><a href="editjadwaltryout.php?id='.$data['id'].'"><center><label class="badge badge-primary">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete6.php?id='.$data['id'].' " onClick="return confirm(\'Apakah user '.$data['mapel'].' ingin dihapus ?\'"><center><label class="badge badge-success">Delete</label></</a></td>';
                       
                       
                   
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