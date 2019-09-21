<div class="row">
            <div class="col-12 grid-margin">
        <form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Search Data Siswa" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-danger btn-xs">Cari Data</button>

      </form><br>

        	<div class="alert alert-danger">
  <img src="images/faces-clipart/pic-1.png">&nbsp;&nbsp;<strong>Data Siswa   </strong>&nbsp; SMP Negeri 34 Bekasi 
</div>

<a href="admin.php?halaman=tambahdatasiswa"><button type="button" class="btn btn-danger">Tambah Data Siswa</button></a><br><br>

  <table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>NIS</center></b></th>
     <th><b><center>Nama Siswa</center></b></th>
     <th><b><center>Kelas</center></b></th>
     <th><b><center>Jenis Kelamin</center></b></th>
      <th colspan="2"><center><b>Action</b></center></th>
                        
      </tr>
      </thead>
      <tbody>


      	<?php
                
                include '../config/koneksi.php';
                
                if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $query = mysqli_query($konek, "SELECT id_siswa,nis,nama,id_kelas,jk FROM siswa where nis like '%".$cari."%' OR nama like '%".$cari."%' OR id_kelas like '%".$cari."%' OR jk like '%".$cari."%'" )or die(mysqli_error());     
                }else{


                $query  = mysqli_query($konek, "SELECT id_siswa,nis,nama,id_kelas,jk FROM  siswa order by id_kelas ")or die(mysqli_error($konek));
              }

                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> '.$data['nis'].'</td>';
                        echo '<td>  <img src="images/faces-clipart/pic-1.png">&nbsp;&nbsp;'.$data['nama'].'</td>';
                        echo '<td> <center>'.$data['id_kelas'].'<center></td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                        echo '<td><a href="editsiswa.php?id='.$data['id_siswa'].'"><center><label class="badge badge-danger">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete.php?id='.$data['id_siswa'].' " onClick="return confirm(\'Apakah user '.$data['nis'].' ingin dihapus ?\'"><center><label class="badge badge-warning">Delete</label></</a></td>';
                       
                        

                     
                       
                       
                   
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