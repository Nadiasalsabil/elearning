<div class="services-w3layouts" id="services">
  <div class="container"> 
 <center><i class="fa fa-mortar-board" style="font-size:48px;color:#1ca0de"></i></center><br>
      <center> <h2><font color="#1ca0de">UPLOAD TUGAS <br></font></h2></center>
    
          <center><font color="#1ca0de"> <h2>SMP Negeri 34 Bekasi </h2></font></center>
          <center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></center><br>
<hr /><br>

<div class="well well-sm">Upload  Tugas</div>
<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">


  <form action="../config/upload.php" method="POST" enctype="multipart/form-data">


<?php
   $query = "SELECT * FROM siswa WHERE nis = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nis = $row['nis'];
?>
  


<div class="form-group">
    <label for="email">NIS:</label>
    <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $row['nis']; ?>" readonly>
  </div>

<div class="form-group">
    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" readonly>
  </div>

  <div class="form-group">
    <label for="email">Kelas:</label>
    <input type="text" class="form-control" id="idkelas" name="idkelas" value="<?php echo $row['id_kelas']; ?>" readonly>
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
    <label for="email">Judul:</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Ex:Paragraph Deduktif">
  </div>

 <div class="form-group">
    <label for="email">Tugas Ke:</label>
    <input type="text" class="form-control" id="tgske" name="tgske" placeholder="Ex:1">
  </div>

 <div class="form-group">
    <label for="email">Tanggal:</label>
    <input type="text" class="form-control" id="tgl1" name="tgl1" value=<?php echo date('d-m-y') ?> readonly >
  </div>

<div class="form-group">
    <label for="email">File:</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
  </div>




  <button type="submit" class="btn btn-primary"><b>Upload</b></button>
</form>
</div>
</div>

</div>

</div>
</div>