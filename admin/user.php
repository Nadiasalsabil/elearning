<div class="content mt-3">

            <div class="col-sm-12">

<h4><b><center> DATA USER SMP NEGERI 34 BEKASI</h4></b></center>
<center><font size="2px">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bekasi, Jawa Barat 17422 </font></center></b>
 <br>
 <center> <img src="../images/2.png" width="130px" height="130px"></center> <hr />

 <button type="button" class="btn btn-primary active"  data-toggle="modal" data-target="#myModal">
    <b>Tambah User    <i class="fa fa-plus"></b></i>
  </button><br><br>



 <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <center><font color="navy"><h4 class="modal-title">Tambahkan User</h4></font></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" id="user" name="user">
  </div>

  <div class="form-group">
    <label for="email">Password:</label>
    <input type="text" class="form-control" id="pass" name="pass">
  </div>

   <div class="form-group">
    <label for="email">Level:</label>
    <input type="text" class="form-control" id="level" name="level">
  </div>

   <div class="form-group">
    <label for="email">Kelas:</label>
    <input type="text" class="form-control" id="kelas" name="kelas">
  </div>


   <div class="form-group">
    <label for="email">Batas Login:</label>
    <input type="text" class="form-control" id="bl" name="bl">
  </div>

   <div class="form-group">
    <label for="email">Blokir:</label>
    <input type="text" class="form-control" id="blokir" name="blokir">
  </div>

   <div class="form-group">
    <label for="email">NO:</label>
    <input type="text" class="form-control" id="no" name="no">
  </div>
  
  <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i>Tambah User</button>
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
        <th style="background-color: #191970;"><font color="white"><b><center>Username</center></b></font></th>
        <th style="background-color: #191970;"><font color="white"><b><center>Password</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Level</center></b></font></th>
         <th style="background-color: #191970;"><font color="white"><b><center>Kelas</center></b></font></th>
           <th style="background-color: #191970;"><font color="white"><b><center>Batas Login</center></b></font></th>
             <th style="background-color: #191970;"><font color="white"><b><center>Blokir</center></b></font></th>
               <th style="background-color: #191970;"><font color="white"><b><center>No</center></b></font></th>
          <th colspan="2" style="background-color: #191970;"><font color="white"><b><center>Action</center></b></font></th>
      </tr>
    </thead>
    </tbody>

     <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT id,username,password,level,id_kelas,batas_login,blokir,no FROM login")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada data!</td></tr>';  
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td> <center>'.$data['username'].' <center></td>';
                        echo '<td> <center>'.$data['password'].'<center></td>';
                        echo '<td> <center>'.$data['level'].'<center></td>';
                        echo '<td> <center>'.$data['id_kelas'].' <center></td>';
                        echo '<td> <center>'.$data['batas_login'].' <center></td>';
                        echo '<td> <center>'.$data['blokir'].' <center></td>';
                        echo '<td> <center>'.$data['no'].' <center></td>';





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