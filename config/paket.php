<?php
	
include '../config/koneksi.php';


$mp=$_POST['mp'];
$mp1=$_POST['mp1'];
$nis=$_POST['nis'];
$paket=$_POST['paket'];


$input="INSERT INTO paket_soal(id,soal,nis,paket,mapel) values ('','$mp','$nis','$paket','$mapel')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan data tugas siswa";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=teacher">'; 
}

?>


