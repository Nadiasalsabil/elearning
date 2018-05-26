<?php
	
include '../config/koneksi.php';


$tanggal=$_POST['tanggal'];
$mapel=$_POST['mapel'];
$tryout=$_POST['tryout'];





$input="INSERT INTO jadwal_tryout(id,tanggal,mapel,tryoutke)values('','$tanggal','$mapel','$tryout')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan Jadwal Tryout";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=tambahjadwaltryout">'; 
}

?>


