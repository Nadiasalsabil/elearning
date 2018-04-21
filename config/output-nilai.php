<?php


 $kelas=$_REQUEST["idkelas"];
 $tugas=$_REQUEST["nis"];
 $semester=$_REQUEST["smt"];
 $nama=$_REQUEST["nama"];
 $mapel=$_REQUEST["mapel1"];
 $abs=$_REQUEST["abs"];
 $tugas=$_REQUEST["tgs"];
 $uts=$_REQUEST["uts"];
 $uas=$_REQUEST["uas"];
 $hasil=($abs+$tugas+$uts+$uas)/4;





 
 echo("Nilai ");
 echo($nama);
 echo(" Adalah:");
 echo($hasil);


 

?>

