<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
 
  <!-- Script Timer -->
     <script type="text/javascript">
        $(document).ready(function(e) {
              /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
              */
              var detik = 0;
              var menit = 60;
              var jam   = 0;
				
					              
             /**
               * Membuat function hitung() sebagai Penghitungan Waktu
             */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                    * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
               /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
               if(menit < 10 && jam == 0){
                     var peringatan = 'style="color:red"';
                    	 	
               };

               if(jam == 0 && menit == 0 && detik == 0){
            		 window.alert('Batas Waktu Pengerjaan anda telah Habis');
            		 window.location.href='jawab12.php';
            	}

     
               /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
               $('#timer').html(
                      '<h1 align="center"'+peringatan+'><font size="3px">Waktu Pengerjaan Anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h1><hr>'

                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
 
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
 
                    /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
 
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                        if(jam < 0) {                                                                 
                            clearInterval();  


                        } 
                    } 
                } 
            }

            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();


      }); 
      // ]]>
    </script>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<div id='timer'></div>











	<h2><center><u>Latihan Soal Matematika 1 </u></center></h2><br>
	
	
	<?php

 include '../config/koneksi.php';
	echo "<h3>selamat mengerjakan :)</h3>
	<b>Ujian Online Pilihan Ganda</b><p><b>
	Pilihlah salah satu jawaban paling tepat dari lima pilihan jawaban yang disediakan!</b></p><br>";

 echo '<table width="100%" border="0">';

		


 $hasil = mysqli_query($konek, "SELECT * from soal WHERE aktif='Y' AND mapel='Latihan Soal Matematika 1' AND kelas='7-1' ORDER BY RAND()")or die(mysqli_error());

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
			<form name="form1" method="post" action="jawab12.php">
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
