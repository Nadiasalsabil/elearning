
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $nip=$_POST['nip'];
    $nama=$_POST['nama'];
    $mapel=$_POST['mapel'];
    $kls=$_POST['kls'];
    $hari=$_POST['hari'];
    $waktu=$_POST['waktu'];

    
    
    


$update     = "UPDATE jadwal_guru SET nip='$nip',mapel='$mapel',kelas='$kls',Hari='$hari',waktu='$waktu' WHERE id='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=jadwalguru">';
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