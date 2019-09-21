<?php

include "../config/koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['pwd']);




$sql = "SELECT * FROM login WHERE username='$username' AND password='$password' ";

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
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../7-1/7-1.php?halaman=awal71">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($kelas=='8-4') {
		  echo "<strong><center> $username sebagai $level dengan kelas $kelas berhasil Login";
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../8-4/8-4.php?halaman=awal84">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($kelas=='9-1') {
		  echo "<strong><center> $username sebagai $level dengan kelas $kelas berhasil Login";
		   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../9-1/9-1.php?halaman=awal91">';
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		}

		if($level=='admin') {
		  echo "<strong><center>Anda berhasil Login sebagai Admin ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/admin.php?halaman=dashboard">';
		}

		if($level=='guru') {
		  echo "<strong><center>Anda berhasil Login sebagai Guru ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=awalguru">';
		}

		if($level=='walikelas') {
		  echo "<strong><center>Anda berhasil Login sebagai Wali Kelas ";
		  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../walikelas/wali-kelas.php?halaman=awalwalikelas">';
		}

		
		//   echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index2.php?halaman=utama">';
		
}    

else 
{
//login GAGAL
	
       echo "<strong><center>Username Atau Password Salah. silahkan Login Kembali <a href=../index.php>Login</a>";
              
              
       }
	



?>
