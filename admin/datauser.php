<div class="row">
            <div class="col-12 grid-margin">


     <form class="forms-sample" form action="" method="POST">
                        <div class="form-group">
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Username" style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-success btn-xs">Cari Data</button>

      </form><br>

            	<div class="alert alert-success">
  <img src="images/faces-clipart/pic-3.png">&nbsp;&nbsp;<strong>Data User</strong>&nbsp; SMP Negeri 34 Bekasi 
</div>
<a href="admin.php?halaman=tambahdatauser"><button type="button" class="btn btn-success">Tambah Data User</button></a><br><br>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th><center><b>No</b></center></th>
       
        <th><center><b>Username</b></center></th>
        <th><center><b>Password</b></center></th>
        <th><center><b>Level</b></center></th>

        <th colspan="2"><center><b>Action</center></th>
      </tr>
    </thead>
    <tbody>

    	 <?php

            include '../config/koneksi.php';

            if(isset($_POST['cari'])){
            $cari = $_POST['cari'];
           $query = mysqli_query($konek, "SELECT id,username,password,level FROM login where username like '%".$cari."%'")or die(mysqli_error());     
             }else{

            $query = mysqli_query($konek, "SELECT id,username,password,level FROM login")or die(mysqli_error());
          }
                   
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td>  <img src="images/faces-clipart/pic-3.png">&nbsp;&nbsp;&nbsp;'.$data['username'].'</td>';
                        echo '<td>'.$data['password'].'</td>';
                        echo '<td><center>'.$data['level'].'</center></td>';
                        echo '<td><a href="edituser.php?id='.$data['id'].'"><center><label class="badge badge-success">Edit</label></center></a></td>';
                        echo '<td><a href="../config/delete3.php?id='.$data['id'].' " onClick="return confirm(\'Apakah user '.$data['username'].' ingin dihapus ?\'"><center><label class="badge badge-primary">Delete</label></</a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    
              
                ?>
     
  </table><br>

   

              <div class="card">
                <div class="card-body">
 






</div>
</div>
</div>