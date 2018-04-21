<?php

	include 'koneksi.php';

	$id = $_GET ['id'];

	$hapus 	= "DELETE FROM diskusi WHERE id='$id'";
	$query	= mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../7-1/7-1.php?halaman=diskusi'>";
	    }
	else {
	    	//echo "<strong><center>Data Gagal Diubah";
	    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
	    	print"
	    		<script>
	    			alert(\"Data Gagal Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }
	


?>