
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $nis=$_POST['nis'];
    $user=$_POST['user'];
    $pass = md5($_POST['pwd']);
     $level=$_POST['level'];
      $kelas=$_POST['kls'];
       $bl=$_POST['bl'];
        $blok=$_POST['blok'];
         $no=$_POST['no'];
    
    


$update     = "UPDATE login SET nis='$nis',username='$user',password='$pass',level='$level',id_kelas='$kelas',batas_login='$$bl',blokir='$blok',no='$no' WHERE id='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Data Berhasil Diubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=datauser">';
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