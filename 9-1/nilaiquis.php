<?php
    error_reporting(0);    
?>
<center><i class="fa fa-wpforms" aria-hidden="false" style="font-size:70px" ></i></center><br>
<center><h3>NILAI QUIS ONLINE SISWA</h3></center>
<center><h3>SMP NEGERI 34 BEKASI</h3>
<p><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></p></center><hr />
<div class="services-w3layouts" id="services">
    <div class="container"> 




<div class="well well-sm">Nilai Quis Online </div>

        <table class="table table-striped" >
    <thead>
      <tr>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NO</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>NIS</center></b></font></th>
        <th style="background-color:   #1ca0de;"><font color="white"><b><center>Kelas</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nama Lengkap</center></b></font></th>
        <th style="background-color:  #1ca0de;"><font color="white"><b><center>Latihan</center></b></font></th>
       
         <th style="background-color:  #1ca0de;"><font color="white"><b><center>Nilai Quis</center></b></font></th>
         

         
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

                    


                    $query  = mysqli_query($konek, "SELECT login.username, nilaiquis.nis, nilaiquis.kelas, nilaiquis.nama,nilaiquis.latihan,  nilaiquis.nilai  FROM nilaiquis, login WHERE nilaiquis.nis = login.username AND login.username = '".$_SESSION['username']."' ")or die(mysqli_error($konek));

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
                            echo '<td> <center>'.$data['kelas'].'<center></td>';
                            echo '<td> <center>'.$data['nama'].'<center></td>';
                            echo '<td> <center>'.$data['latihan'].'<center></td>';
                            
                            echo '<td> <center>'.$data['nilai'].' <center></td>';
                                       
                            echo '</tr>';
                            $no++;  
                          }
                        }
                  }

                  

            ?>
</table>

<div class="well well-sm">Grafik Nilai Quis Online </div>

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
            text: 'Grafik Nilai Quis Online '
         },
         xAxis: {
            categories: ['Mata Pelajaran']
         },
         yAxis: {
            title: {
               text: 'Nilai Quis Online'
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
           $sql   = "SELECT nilaiquis.latihan  FROM nilaiquis,login where nilaiquis.nis = login.username AND login.username = '".$_SESSION['username']."' ";
            $query = mysqli_query($konek, $sql )  or die(mysql_error($konek));
            while( $ret = mysqli_fetch_array( $query ) ){
              $merek=$ret['latihan'];                     
                 $sql_jumlah   = "SELECT nilaiquis.nilai FROM nilaiquis,login WHERE nilaiquis.latihan='$merek' AND nilaiquis.nis = login.username AND login.username = '".$_SESSION['username']."' ";        
                 $query_jumlah = mysqli_query($konek,$sql_jumlah ) or die(mysql_error($konek));
                 while( $data = mysqli_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['nilai'];                 
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
</div>