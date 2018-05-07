<?php
	
include '../config/koneksi.php';


$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kls=$_POST['kls'];
$jk=$_POST['jk'];





$input="INSERT INTO siswa(id_siswa,nis,nama,id_kelas,jk)values('','$nis','$nama','$kls','$jk')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasil menambahkan data Siswa";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=datasiswa">'; 
}

?>


