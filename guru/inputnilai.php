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
five = document.autoSumForm.nilai1.value;
document.autoSumForm.rata2.value = (one*0.1) + (two*0.2) + (three*0.2 ) + (four*0.3) + (five*0.2) ;}
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
    <input type="text" class="form-control" id="guru" name="guru" value="<?php echo $row['nama']; ?>" readonly>
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
    <input type="text" class="form-control" id="nis" name="nis" placeholder="Ex: 201810896" onkeyup="autofill()">
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
     <center><select size="1" class="form-control" id="mapel1" name="mapel1" onkeyup="autofill()">
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


<?php






$query = "SELECT AVG(nilai) as nilaii FROM nilaiquis where mapel = 'Bahasa Indonesia' ";

$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

// $nip = $row['nis'];
?>


 <div class="form-group">
    <label for="email">Nilai Quis Online:</label>
    <input type="text" class="form-control" id="nilai1" name="nilai1" value="<?php echo $row['nilaii']; ?>" onFocus="startCalc();" onBlur="stopCalc();" readonly>
  </div>

  


 <div class="form-group">

    <label for="email">Nilai Rata-rata:</label>
    <input type="text" class="form-control" id="rata2" name="rata2" value='0' readonly>
    
  </div>

   <button type="submit" class="btn btn-primary">Simpan Nilai Siswa</button>
<br>

 
</form>


<!-- <script src="jquery-1.12.4.min.js">
  function autofill(){
    var nis = $('#nis').val();
    $.ajax({
      url : 'autofill-ajax.php',
      data : 'nis='+nis,
    }).success(function(data){
        var json = data,
        obj = JSON.parse(json);
        $("#nilai1").val(obj.nilai1);

    });
  }

</script>   -->

</body>
</html>
<div class="services-w3layouts" id="services">
	<div class="container">	




















</div>
</div>