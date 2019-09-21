
<?php

    include '../config/koneksi.php';
    
    $id=$_POST['id'];
    $user=$_POST['username'];
     $pass = md5($_POST['password']);
    
    
    


$update     = "UPDATE login SET username='$user',password='$pass' WHERE id='$id'";
    $updateregis  = mysqli_query($konek, $update)or die(mysqli_error($konek));

if ($updateregis)
    {
        echo "<strong><center>Password Berhasil di Ubah";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../7-1/7-1.php?halaman=awal71">';
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