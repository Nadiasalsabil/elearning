<?php
include '../config/koneksi.php';

$filename = $_FILES["filename"]["tmp_name"];
if($_FILES["filename"]["size"] > 0)
{
	$file = fopen($filename, "r");

	while (($getdata = fgetcsv($file, 10000, ",")) !== FALSE)
	{
		$sql = "INSERT INTO soal(kelas,mapel,soal,a,b,c,d,e,kunci_jawaban,gambar,tanggal,aktif) VALUES ('$getdata[1]','$getdata[2]','$getdata[3]','$getdata[4]','$getdata[5]','$getdata[6]','$getdata[7]','$getdata[8]','$getdata[9]','$getdata[10]','$getdata[11]','$getdata[12]') ";

		$result = mysqli_query($konek,$sql);
		if(!isset($result))
		{
			echo "FILE INVALID, Hanya csv yang diizinkam";
		}
		else
		{
			echo "FILE berhasil diimport";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../guru/guru.php?halaman=mapel">';
		}
	}

	fclose($file);
}

?>