
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
   $tanggal=$_POST['tanggal'];
$mapel=$_POST['mapel'];
$tryout=$_POST['tryout'];


    
    
    


$update     = "UPDATE jadwal_tryout SET tanggal='$tanggal',mapel='$mapel',tryoutke='$tryout' WHERE id='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=jadwaltryout">';
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