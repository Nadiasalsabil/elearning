<div class="content mt-3">

            <div class="col-sm-12">

<h4><b><center> DATA SISWA SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br>
 <center> <img src="../images/2.png" width="130px" height="130px"></center> <hr /><br>
  <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah Data Siswa   <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan Data Siswa</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="../config/tambah-siswa.php" method="post">
  <div class="form-group">
    <label for="email">Nomor Induk Siswa:</label>
    <input type="text" class="form-control" id="nis" name="nis">
  </div>

  <div class="form-group">
    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>

   <div class="form-group">
    <label for="email">Kelas:</label>
    <input type="text" class="form-control" id="kls" name="kls">
  </div>

   <div class="form-group">
    <label for="email">Jenis Kelamin:</label>
    <input type="text" class="form-control" id="jk" name="jk">
  </div>
  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah Data Siswa</button>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  

<form class="form-horizontal" action="" method="POST">
       <div class="form-group">
    <label for="email">nis:</label>
    <input type="text" class="form-control" id="nis" name="nis">
  </div>
   
        <div class="form-group">
            <label class="control-label col-sm-4"></label>
            <div class="col-sm-7" align="right">
                <button type="submit" class="btn btn-info" value="pencarian" name="cari">Cek Siswa</button>
            </div>
        </div>
        <br><br><br>
        <center>

          <table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
       <th style="background-color: #191970;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nomor Induk Siswa</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>ID.Kelas</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Jenis Kelamin</center></b></font></th>
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>


      </tr>
    </thead>
    </tbody>
            <?php
                
                include '../config/koneksi.php';
                if(isset($_POST['cari'])){
                    $nis = $_POST['nis'];
                     
                }


                $query  = mysqli_query($konek, "SELECT id_siswa, nis,nama,id_kelas,jk FROM  siswa WHERE nis = '$nis'")or die(mysqli_error($konek));

                    if(mysqli_num_rows($query) == 0){   
                                
                    }
                     else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['nis'].' <center></td>';
                        echo '<td> <center>'.$data['nama'].'<center></td>';
                        echo '<td> <center>'.$data['id_kelas'].'<center></td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                        echo '<td><a href="../config/edit.php?id='.$data['id_siswa'].'" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="../config/delete.php?id='.$data['id_siswa'].' " onClick="return confirm(\'Apakah user '.$data['nis'].' ingin dihapus ?\'" i class="fa fa-trash"></i></a></td>';
                        

                     
                       
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }


    ?>
</table>
 </form>

 <hr /><hr />




 <table class="table table-striped" style="background-color: #E6E6FA;">
    <thead>
      <tr>
        <th style="background-color: #191970;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nomor Induk Siswa</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>ID.Kelas</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Jenis Kelamin</center></b></font></th>
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>
  


        <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id_siswa,nis,nama,id_kelas,jk FROM siswa where id_kelas='8-4' ")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['nis'].' <center></td>';
                        echo '<td> <center>'.$data['nama'].'<center></td>';
                        echo '<td> <center>'.$data['id_kelas'].'<center></td>';
                        echo '<td> <center>'.$data['jk'].' <center></td>';
                        echo '<td><a href="../config/edit.php?id='.$data['id_siswa'].'" i class="fa fa-pencil-square"></i></a></td>';
                        echo '<td><a href="../config/delete.php?id='.$data['id_siswa'].' " onClick="return confirm(\'Apakah user '.$data['nis'].' ingin dihapus ?\'" i class="fa fa-trash"></i></a></td>';
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
</table>

<ul class="pagination">

  <li class="page-item"><a class="page-link" href="admin.php?halaman=siswa">1</a></li>
  <li class="page-item"><a class="page-link" href="../admin/siswa2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4</a></li>
  <li class="page-item"><a class="page-link" href="#">5</a></li>
   <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
     <li class="page-item"><a class="page-link" href="#">8</a></li>
      <li class="page-item"><a class="page-link" href="#">9</a></li>
       <li class="page-item"><a class="page-link" href="#">10</a></li>
        <li class="page-item"><a class="page-link" href="#">11</a></li>
         <li class="page-item"><a class="page-link" href="#">12</a></li>
           <li class="page-item"><a class="page-link" href="#">13</a></li>
             <li class="page-item"><a class="page-link" href="#">14</a></li>
               <li class="page-item"><a class="page-link" href="#">15</a></li>
 
</ul>
  


     </div>
            </div>