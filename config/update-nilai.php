
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $a=$_POST['guru'];
    $b=$_POST['kls'];
    $c=$_POST['nis'];
    $d=$_POST['nama'];
    $e=$_POST['abs'];
    $f=$_POST['tgs'];
    $g=$_POST['uts'];
    $h=$_POST['uas'];
    $i=$_POST['rata2'];
   
    
    


$update     = "UPDATE nilai SET guru='$a',kelas='$b',nis='$c',nama='$d',absen='$e',tugas='$f',uts='$g',uas='$h',rata='$i' WHERE id='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=editnilai">';
    }
else {
        //echo "<strong><center>Data Gagal Diubah";
        //echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
        print"
            <script>
                alert(\"Data Gagal Diubah!\");
                history.back(-1);
            </script>";
    }
?>