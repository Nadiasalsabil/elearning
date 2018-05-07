
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $jbt=$_POST['jbt'];
    $jk=$_POST['jk'];

    
    
    


$update     = "UPDATE guru SET nip='$nip',nama='$nama',jabatan='$jbt',jk='$jk' WHERE id_guru='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=dataguru">';
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