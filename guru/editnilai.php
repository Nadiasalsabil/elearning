<?php
    error_reporting(0);    
?>

<div class="services-w3layouts" id="services">
	<div class="container">	


<div class="well well-sm"><b>Ubah / Hapus Nilai Siswa</b></div>

<form class="forms-sample" form action="" method="POST">
                        <div class="form-group" >
                         
                          <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan NIS " style="width: 350px;">
                        </div>
<button type="submit" class="btn btn-primary btn-xs">Cari Data</button>

      </form><br>

   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nama</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mapel</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Absen</center></b></font></th>
           <th style="background-color:  #1ca0de;"><font color="white"><b><center>Tugas</center></b></font></th>
             <th style="background-color:  #1ca0de;"><font color="white"><b><center>UTS</center></b></font></th>
               <th style="background-color:  #1ca0de;"><font color="white"><b><center>UAS</center></b></font></th>
               <th style="background-color:  #1ca0de;"><font color="white"><b><center>Rata-rata</center></b></font></th>
                <th colspan="2" style="background-color:  #1ca0de;"><font color="white"><center><b>Action</b></center></font></th>
        

         
      </tr>
    </thead>
    </tbody>
  

            <?php

                session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';

                    
                    if(isset($_POST['cari'])){
                    $cari = $_POST['cari'];
                    $query = mysqli_query($konek, "SELECT login.username, nilai.id,nilai.kelas,nilai.nis,nilai.smt,nilai.nama,nilai.mapel,nilai.absen,nilai.tugas,nilai.uts,nilai.uas,nilai.rata FROM nilai, login where nilai.nis  like '%".$cari."%' AND nilai.guru = login.username AND login.username = '".$_SESSION['username']."' " )or die(mysqli_error());     
                    }else{

                    $query  = mysqli_query($konek, "SELECT login.username,nilai.id, nilai.kelas,nilai.nis,nilai.smt,nilai.nama,nilai.mapel,nilai.absen,nilai.tugas,nilai.uts,nilai.uas,nilai.rata FROM nilai, login WHERE nilai.guru = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));
                }

                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['kelas'].' <center></td>';
                            echo '<td> <center>'.$data['nis'].'<center></td>';
                             echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                            echo '<td> <center>'.$data['mapel'].' <center></td>';
                            echo '<td> <center>'.$data['absen'].' <center></td>';
                            echo '<td> <center>'.$data['tugas'].' <center></td>';
                            echo '<td> <center>'.$data['uts'].' <center></td>';
                            echo '<td> <center>'.$data['uas'].' <center></td>';
                              echo '<td> <center>'.$data['rata'].' <center></td>';
                            echo '<td><a href="editnilai1.php?id='.$data['id'].'"><center>Ubah</center></a></td>';
                            echo '<td><a href=../config/hapus.php?id='.$data['id'].' " onClick="return confirm(\'Apakah user '.$data['nama'].' ingin dihapus ?\'"><center>Hapus</center></a></td>';
                                        
                            echo '</tr>';
                            $no++;  
                          }
                        
                  }

                  

            ?>
</table>

















</div>
</div>