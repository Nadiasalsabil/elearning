<?php
	
include '../config/koneksi.php';


$nip=$_POST['nip'];
$nama=$_POST['nama'];
$mapel=$_POST['mapel'];
$kelas=$_POST['kelas'];
$hari=$_POST['hari'];
$waktu=$_POST['waktu'];





$input="INSERT INTO jadwal_guru(id,nip,nama,mapel,kelas,hari,waktu)values('','$nip','$nama','$mapel','$kelas','$hari','$waktu')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan Jadwal KBM Guru";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=jadwal-guru">'; 
}

?>


