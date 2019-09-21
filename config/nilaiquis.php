<?php
	
include '../config/koneksi.php';

$nis = $_POST["nis"];
$kelas = $_POST['kls'];
$nama = $_POST['nama'];
$mapel = $_POST['mp'];
$nilai = $_POST['ni'];
$id_tq = $_GET['id_tq'];




$input="INSERT INTO nilaiquis(id_quis,nis,kelas,nama,latihan,nilai)values('','$nis','$kelas','$nama','$mapel','$nilai')";
$data=mysqli_query($konek,$input) or die(mysql_error());


$input2="INSERT INTO statussoal values('$nis', '$id_tq', 1)";
$data2=mysqli_query($konek,$input2) or die(mysql_error());

if($data && $data2){
	echo "<strong><center>Nilai Anda berhasil disimpan";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../7-1/7-1.php?halaman=awal71">'; 
}

?>




