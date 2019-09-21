
<?php
    error_reporting(0);    
?>
<center><i class="fa fa-wpforms" aria-hidden="false" style="font-size:70px" ></i></center><br>
<center><h3>NILAI SISWA</h3></center>
<center><h3>SMP NEGERI 34 BEKASI</h3>
<p><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></p></center><hr />
<div class="services-w3layouts" id="services">
    <div class="container"> 

<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">
<div class="well well-sm">Nilai Absen / Tugas / UTS / UAS SEMESTER I</div>
   
   
        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Semester</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Mata Pelajaran</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Absen</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Tugas</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>UTS</center></b></font></th>
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>UAS</center></b></font></th>
           <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nilai Rata-Rata</center></b></font></th>

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilai.nis,nilai.smt, nilai.nama,nilai.mapel, nilai.absen, nilai.tugas, nilai.uts, nilai.uas, nilai.rata    FROM nilai, login WHERE nilai.smt='1' AND nilai.nis = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

                        if(mysqli_num_rows($query) == 0){   
                                    
                        echo '<tr><td colspan="5" align="center">Belum ada data!</td></tr>';  
                        }
                          else
                        { 
                          $no = 1;        
                          while($data = mysqli_fetch_array($query)){  
                            echo '<tr>';
                            echo '<td><center>'.$no.'</center></td>';
                            echo '<td> <center>'.$data['nis'].' <center></td>';
                             echo '<td> <center>'.$data['smt'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                             echo '<td> <center>'.$data['mapel'].'<center></td>';
                            echo '<td> <center>'.$data['absen'].'<center></td>';
                            echo '<td> <center>'.$data['tugas'].' <center></td>';
                            echo '<td> <center>'.$data['uts'].' <center></td>';
                            echo '<td> <center>'.$data['uas'].' <center></td>';
                            echo '<td> <center>'.$data['rata'].' <center></td>';   

                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>
</div>
</div><br> <hr />


<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">

<div class="well well-sm">Grafik Nilai Semester I</div>

</div>

 
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Nilai Semester I '
         },
         xAxis: {
            categories: ['Mata Pelajaran']
         },
         yAxis: {
            title: {
               text: 'Nilai Rata-rata'
            }
         },
              series:             
            [
            <?php 

          include('../config/koneksi.php');

                 session_start();

                if (!isset($_SESSION['username'])){
               header("Location:./index.php");
                   }

                

                if (isset($_SESSION['username']))
                  {   
                    include '../config/koneksi.php';
           $sql   = "SELECT nilai.mapel  FROM nilai,login where smt='1' AND nilai.nis = login.username AND login.username = '".$_SESSION['username']."' ";
            $query = mysqli_query($konek, $sql )  or die(mysql_error($konek));
            while( $ret = mysqli_fetch_array( $query ) ){
              $merek=$ret['mapel'];                     
                 $sql_jumlah   = "SELECT nilai.rata FROM nilai,login WHERE nilai.mapel='$merek' AND smt='1' AND nilai.nis = login.username AND login.username = '".$_SESSION['username']."' ";        
                 $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                 while( $data = mysqli_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['rata'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });  

<?php } ?>
</script>





  
    <div id='container'></div>    

</div>
</div><br>
</br></br></br></br>
<!--- Bagian Judul--> 

 


  
   


</div>
</div>