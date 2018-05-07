<?php

	include '../config/koneksi.php';

	$id = $_GET ['id'];

	$hapus 	= "DELETE FROM guru WHERE id_guru='$id'";
	$query	= mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<strong><center>Data Berhasil Dihapus";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../admin/admin.php?halaman=dataguru'>";
	    }
	else {
	    	//echo "<strong><center>Data Gagal Diubah";
	    	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../index.php?halaman=edit_info">';
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }
	


?>