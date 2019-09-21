<?php
	
include '../config/koneksi.php';


$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jbt=$_POST['jbt'];
$jk=$_POST['jk'];





$input="INSERT INTO guru(id_guru,nip,nama,jabatan,jk)values('','$nip','$nama','$jbt','$jk')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasi menambahkan data guru";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=tambahdataguru">'; 
}

?>


