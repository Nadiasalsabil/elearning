<?php
	
include '../config/koneksi.php';

$nis = $_POST["nis"];
$kelas = $_POST['kls'];
$nama = $_POST['nama'];
$mapel = $_POST['mp'];
$nilai = $_POST['ni'];




$input="INSERT INTO nilaiquis(id_quis,nis,kelas,nama,latihan,nilai)values('','$nis','$kelas','$nama','$mapel','$nilai')";
$data=mysqli_query($konek,$input) or die(mysql_error());

if($data){
	echo "<strong><center>Nilai Anda berhasil disimpan";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../8-4/8-4.php">'; 
}

?>




