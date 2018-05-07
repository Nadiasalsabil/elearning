<?php
	
include '../config/koneksi.php';

$waktu=$_POST['waktu'];
$hari=$_POST['hari'];
$mapel=$_POST['mapel'];
$guru=$_POST['guru'];
$kelas=$_POST['kelas'];






$input="INSERT INTO jadwal(id_jadwal,waktu,hari,pelajaran,guru,id_kelas)values('','$waktu','$hari','$mapel','$guru','$kelas')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan Jadwal KBM Guru";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=jadwalsiswa">'; 
}

?>


