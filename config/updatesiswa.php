
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kls=$_POST['kls'];
    $jk=$_POST['jk'];

    
    
    


$update     = "UPDATE siswa SET nis='$nis',nama='$nama',id_kelas='$kls',jk='$jk' WHERE id_siswa='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=datasiswa">';
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