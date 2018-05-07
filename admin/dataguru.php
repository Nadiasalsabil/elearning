<div class="row">
            <div class="col-12 grid-margin">
            	<form class="forms-sample" form action="" method="POST">
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan NIP Guru" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-warning btn-xs">Cari Data</button>

      </form><br>

            		<div class="alert alert-warning">
  <img src="images/faces-clipart/pic-4.png">&nbsp;&nbsp;<strong>Data Guru</strong>&nbsp; SMP Negeri 34 Bekasi 
</div>

<a href="admin.php?halaman=tambahdataguru"><button type="button" class="btn btn-warning">Tambah Data Guru</button></a><br><br>

<table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>NIP</center></b></th>
     <th><b><center>Nama Guru</center></b></th>
     <th><b><center>Jabatan</center></b></th>
     <th><b><center>Jenis Kelamin</center></b></th>
      <th colspan="2"><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>


      	<?php

            include '../config/koneksi.php';

             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id_guru,nip,nama,jabatan,jk FROM guru where nip like '%".$cari."%'")or die(mysqli_error());     
             }else{





            $query = mysqli_query($konek, "SELECT id_guru,nip,nama,jabatan,jk FROM guru")or die(mysqli_error());
            }
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td>'.$data['nip'].'</td>';
                        echo '<td><img src="images/faces-clipart/pic-4.png">&nbsp;&nbsp; '.$data['nama'].'</td>';
                        echo '<td>'.$data['jabatan'].'</td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                       echo '<td><a href="editguru.php?id='.$data['id_guru'].'"><center><label class="badge badge-warning">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete2.php?id='.$data['id_guru'].' " onClick="return confirm(\'Apakah user '.$data['nip'].' ingin dihapus ?\'""><center><label class="badge badge-danger">Delete</label></</a></td>';
                       
                   
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