<?php
	
include '../config/koneksi.php';


$nis=$_POST['nis'];
$user=$_POST['user'];
$pwd=md5($_POST ['pwd']);
$level=$_POST['level'];
$kls=$_POST['kls'];
$bl=$_POST['bl'];
$blok=$_POST['blok'];
$no=$_POST['no'];




$input="INSERT INTO login(id,nis,username,password,level,id_kelas,batas_login,blokir,no)values('','$nis','$user','$pwd','$level','$kls','$bl','$blok','$no')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){
	echo "<strong><center>Anda telah berhasi menambahkan data siswa";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=datauser">'; 
}

?>


