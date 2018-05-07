	<h2><center><u>Latihan Soal Ilmu Pengetahuan Sosial 5 </u></center></h2><br>
	
	
	<?php

 include '../config/koneksi.php';
	echo "<h3>selamat mengerjakan :)</h3>
	<b>Ujian Online Pilihan Ganda</b><p><b>
	Pilihlah salah satu jawaban paling tepat dari lima pilihan jawaban yang disediakan!</b></p><br>";

 echo '<table width="100%" border="0">';

		


 $hasil = mysqli_query($konek, "SELECT * from soal WHERE aktif='Y' AND mapel='Latihan Soal IPS 5' AND kelas='7-1' ORDER BY RAND()")or die(mysqli_error());

		$jumlah=mysqli_num_rows($hasil);
		$urut=0;
		 while($row = mysqli_fetch_array($hasil))
		{
			$id=$row["id_soal"];
			$pertanyaan=$row["soal"];
			$pilihan_a=$row["a"];
			$pilihan_b=$row["b"];
			$pilihan_c=$row["c"];
			$pilihan_d=$row["d"];
			$pilihan_e=$row["e"];  
			
			?>
			<form name="form1" method="post" action="jawab28.php">
			<input type="hidden" name="id[]" value=<?php echo $id; ?>>
			<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
			<tr>
			  	<td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
			  	<td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
			</tr>
			<?php
				if (!empty($row["gambar"])) {
					echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
				}
			?>
			<tr>
			  	<td height="21"><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
	  	      <?php echo "$pilihan_a";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
	  	      <?php echo "$pilihan_b";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
	  	      <?php echo "$pilihan_c";?></font> </td>
			</tr>
			<tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
	  	      <?php echo "$pilihan_d";?></font> </td>
            </tr>

            <tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    E.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="E"> 
	  	      <?php echo "$pilihan_e";?></font> </td>
            </tr>
			
		<?php
		}
		?>

        	<tr>
				<td>&nbsp;</td>
			  	<td><input type="submit" name="submit" value="Selesai" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
            </tr>
			</table>
</form>
        </p>
</div>

<div class="banner-text"> 



</div>
