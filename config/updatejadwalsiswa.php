
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $waktu=$_POST['waktu'];
    $hari=$_POST['hari'];
    $plj=$_POST['pelajaran'];
    $guru=$_POST['guru'];
    $kls=$_POST['kls'];
    


    
    
    


$update     = "UPDATE jadwal SET waktu='$waktu',hari='$hari',pelajaran='$plj',guru='$guru',id_kelas='$kls' WHERE id_jadwal='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=jadwalsiswa">';
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