<?php
	
include '../config/koneksi.php';

$id=$_POST['id'];
$module=$_POST['module_exam'];
$status=$_POST['status'];

$input="INSERT INTO statussoal(student_id,module,status) values('id','module','status')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));
?>


