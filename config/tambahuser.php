<?php
	
include '../config/koneksi.php';


$nis=$_POST['nis'];
$user=$_POST['user'];
$pwd=md5($_POST ['pwd']);
$level=$_POST['level'];
$kls=$_POST['kls'];





$input="INSERT INTO login(id,nis,username,password,level,id_kelas)values('','$nis','$user','$pwd','$level','$kls')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasi menambahkan data user";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=tambahdatauser">'; 
}

?>


