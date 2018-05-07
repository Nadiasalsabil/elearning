<center><i class="fa fa-wpforms" style="font-size:48px;color:#1ca0de"></i></center><br>
      <center> <h2><font color="#1ca0de">INPUT NILAI SISWA <br></font></h2></center>
    
          <center><font color="#1ca0de"> <h3>SMP Negeri 34 Bekasi </h3></font></center>
          <center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></center><br><hr />




<div class="well well-sm">Input Nilai Siswa</div>


  
  <html>
<head>
<script><!--

function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.abs.value;
two = document.autoSumForm.tgs.value;
three = document.autoSumForm.uts.value;
four = document.autoSumForm.uas.value;
document.autoSumForm.rata2.value = (one/4) + (two/4) + (three/4 ) + (four/4)  ;}
function stopCalc(){
clearInterval(interval);}
</script>

</head>

<form name='autoSumForm' action="../config/simpan-nilai.php" method="post">
 <?php
   $query = "SELECT * FROM guru WHERE nip = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nip = $row['nip'];
?>
<div class="form-group">
    <label for="email">Nama Guru :</label>
    <input type="text" class="form-control" id="guru" name="guru" value="<?php echo $row['nip']; ?>" readonly>
  </div>



    <div class="form-group">
      <label for="mapel">Kelas:</label>
     <center><select size="1" class="form-control" id="idkelas" name="idkelas" >
     <option>7-1
     <option>7-2
     <option>7-3
      <option>7-4
      <option>7-5
        <option>8-1
          <option>8-2
            <option>8-3
              <option>8-4
                <option>8-5
                  <option>9-1
                    <option>9-2
                      <option>9-3
                        <option>9-4
                          <option>9-5
      </select>
      </center>
      </div>
  <div class="form-group">
    <label for="email">Nomor Induk Siswa:</label>
    <input type="text" class="form-control" id="nis" name="nis" placeholder="Ex: 201810896">
  </div>

  <div class="form-group">
    <label for="email">Semester:</label>
     <center><select size="1" class="form-control" id="smt" name="smt">
     <option>1
       <option>2
         </select>
      </center>

  </div>
  <div class="form-group">
    <label for="email">Nama Siswa:</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Ex: Daffa Fazlu Rahman">
  </div>
 <div class="form-group">
      <label for="mapel">Mata Pelajaran:</label>
     <center><select size="1" class="form-control" id="mapel1" name="mapel1" >
     <option>Bahasa Indonesia
     <option>Bahasa Inggris
     <option>Matematika
      <option>IPA
      <option>IPS
        <option>PKN
             <option>PAI
                 <option>BK
                     <option>PENJASKES
                         <option>PLH
                                 <option>Prakarya
                                     <option>Bahasa Sunda
      </select>
      </center>
      </div>
  <div class="form-group">
    <label for="email">Nilai Absen:</label>
    <input type="text" class="form-control" id="abs" name="abs" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Ex: 80">
  </div>
  <div class="form-group">
    <label for="email">Nilai Tugas:</label>
    <input type="text" class="form-control" id="tgs" name="tgs" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Ex: 80">
  </div>
  <div class="form-group">
    <label for="email">Nilai UTS:</label>
    <input type="text" class="form-control" id="uts" name="uts" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Ex : 87">
  </div>
  <div class="form-group">
    <label for="email">Nilai UAS:</label>
    <input type="text" class="form-control" id="uas" name="uas" onFocus="startCalc();" onBlur="stopCalc();" placeholder="Ex : 88">
  </div>

  


 <div class="form-group">

    <label for="email">Nilai Rata-rata:</label>
    <input type="text" class="form-control" id="rata2" name="rata2" value='0' readonly>
    
  </div>

   <button type="submit" class="btn btn-primary">Simpan Nilai Siswa</button>
<br>

 
</form>




</body>
</html>
<div class="services-w3layouts" id="services">
	<div class="container">	




















</div>
</div>