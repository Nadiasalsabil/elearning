<?php
	
include '../config/koneksi.php';

$kelas=$_POST['idkelas'];
$nis=$_POST['nis'];
$semester=$_POST['smt'];
$nama=$_POST['nama'];
$mapel=$_POST['mapel1'];
$absen=$_POST['abs'];
$tugas=$_POST['tgs'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$rataa=$_POST['rata2'];

$input="INSERT INTO nilai(id,kelas,nis,smt,nama,mapel,absen,tugas,uts,uas,rata)values('','$kelas','$nis','$semester','$nama','$mapel','$absen','$tugas','$uts','$uas','$rataa')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan data Siswa";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=inputnilai">'; 
}

?>


