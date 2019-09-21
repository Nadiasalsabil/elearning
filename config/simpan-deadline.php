<?php
	
include '../config/koneksi.php';

$nama=$_POST['nama'];
$kelas=$_POST['idkelas'];
$mp=$_POST['mp'];
$desc=$_POST['des'];
$ded1=$_POST['ded1'];
$ded=$_POST['ded'];


$input="INSERT INTO deadline_tugas(id,nama,kelas,mapel,deskripsi_tugas,tglmulai,deadline)values('','$nama','$kelas','$mp','$desc','$ded1','$ded')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan data tugas siswa";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=teacher">'; 
}

?>


