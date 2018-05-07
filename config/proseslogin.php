<?php

include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['pwd']);




$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' AND blokir='N'";

$query = mysqli_query($konek,$sql)or die(mysqli_error($konek));
$jlhrecord = mysqli_num_rows($query);

$data = mysqli_fetch_array($query);
$username = $data['username'];
$level    = $data['level'];
$kelas    = $data['id_kelas'];

if($jlhrecord > 0){

		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['id_kelas'] = $kelas;
		 
		if($kelas=='7-1') {
		  echo "<strong><center> $username sebagai $level dengan kelas $kelas berhasil Login";
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../7-1/7-1.php">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($kelas=='8-4') {
		  echo "<strong><center> $username sebagai $level dengan kelas $kelas berhasil Login";
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../8-4/8-4.php">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($kelas=='9-1') {
		  echo "<strong><center> $username sebagai $level dengan kelas $kelas berhasil Login";
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../9-1/9-1.php">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($level=='admin') {
		  echo "<strong><center>Anda berhasil Login sebagai Admin ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=dashboard">';
		}

		if($level=='guru') {
		  echo "<strong><center>Anda berhasil Login sebagai Guru ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php">';
		}

		if($level=='walikelas') {
		  echo "<strong><center>Anda berhasil Login sebagai Wali Kelas ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../walikelas/wali-kelas.php">';
		}

		
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		
	    
}
else
{
//login GAGAL
	mysqli_query($konek,"UPDATE login SET batas_login = batas_login + 1 where username='$username'");
 	$cek=mysqli_fetch_array(mysqli_query($konek,"SELECT batas_login from login where username= '$username'"));
 	$hasil=$cek['batas_login'];
 	if($hasil > 2){
        mysqli_query($konek,"UPDATE login SET blokir = 'Y' where username='$username'");
        echo "<strong><center>Username $username Telah Di Blokir, Silahkan Hubungi Admin";
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">'; 
            }
        else{
       echo "<strong><center>Username Atau Password Salah. Anda Sudah $hasil Kali Mencoba 
       		. Silahkan <a href=../index.php>Login</a>";
              
              
	   }
}
	




?>
