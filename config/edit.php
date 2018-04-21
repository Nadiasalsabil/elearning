<?php
include '../config/koneksi.php';

		

$edit="SELECT * FROM siswa WHERE id_siswa='$_GET[id]'";
$hasil=mysqli_query($konek,$edit)or die(mysqli_error($konek));
$data=mysqli_fetch_array($hasil);
?>
<h2>Edit User</h1>
<form action= "update.php" method= "POST" >
<input type= "hidden" name="id" value=<?php echo $data['id_siswa']; ?>>
<table>

	<tr>
<td>NIS</td>
<td>:</td>
<td><input type="text" name="nis" value=<?php echo $data['nis'];?> ></td>
</tr>



<tr><td colspan="3" align="center"><input class="button" type="submit"  name="change" value="Edit"></td></tr>
</table>
</form>
<?php 
 ?>

