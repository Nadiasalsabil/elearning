
  <!-- // echo date('y-m-d'); -->


<center><i class="fa fa-mortar-board" style="font-size:48px;color:#1ca0de"></i></center><br>
      <center> <h2><font color="#1ca0de">TEACHER <br></font></h2></center>
    
          <center><font color="#1ca0de"> <h2>SMP Negeri 34 Bekasi </h2></font></center>
          <center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></center><br><hr />


<div class="services-w3layouts" id="services">
	<div class="container">	

<div class="well well-sm">Upload Tugas</div>
<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">

      <form action="../config/simpan-deadline.php" method="POST" >



  <div class="form-group">



  <?php
   $query = "SELECT * FROM guru WHERE nip = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nis = $row['nip'];
?>

<div class="form-group">


    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" readonly>
  </div>

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
      <label for="gender">Mata Pelajaran:</label>
     <center><select size="1" id="mp" name="mp" class="form-control" >
     <option> Bahasa Indonesia 1 
     <option> Matematika
     <option> Bahasa Inggris
     <option> Ilmu Pengetahuan Alam
     <option> Ilmu Pengatuhan Sosial
     <option> Matematika
     <option> PLH
     <option> PAI
     <option> PENJASKES
     <option> PPKN
    
    
      </select>
      </center>
      </div>

<div class="form-group">
    <label for="email">Deskripsi Tugas:</label>
    <textarea class="form-control" rows="5" id="des" name="des"></textarea style="background-color:white;">
  </div>

  <div class="form-group">
    <label for="email">Tanggal Mulai:</label>
    <input type="text" class="form-control" id="ded1" name="ded1" value=<?php echo date('d-m-y') ?> readonly>
  </div><br>

  <div class="form-group">
    <label for="email">Tanggal Deadline:</label>
    <input type="date" class="form-control" id="ded" name="ded">
  </div><br>

   <button type="submit" class="btn btn-primary">Simpan</button>
</div>
</div>
</div>
<br><hr /><br>









	

<div class="well well-sm">Upload Materi</div>
<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">


  <form action="../config/upload-materi.php" method="POST" enctype="multipart/form-data">
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
      <label for="mapel">Mata Pelajaran:</label>
     <center><select size="1" class="form-control" id="mapel1" name="mapel1" >
     <option>Bahasa Indonesia
     <option>Bahasa Inggris
     <option>Matematika
      <option>IPA
      <option>IPS
       
      </select>
      </center>
      </div>


   <div class="form-group">
    <label for="email">Judul:</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Ex:Sistem Peredaran Darah">
  </div>

 <div class="form-group">
    <label for="email">BAB Materi / Soal:</label>
    <input type="text" class="form-control" id="bab" name="bab" placeholder="Ex:Bab 1">
  </div>

 <div class="form-group">
    <label for="email">Tanggal:</label>
    <input type="date" class="form-control" id="tgl1" name="tgl1">
  </div>

<div class="form-group">
    <label for="email">File:</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
  </div>




  <button type="submit" class="btn btn-primary">Upload</button>


</form>
</div>
</div>
<br><hr />





<div class="well well-sm">Upload Quiz Online</div>






<form action="../config/upload-quisonline.php" method="POST" enctype="multipart/form-data">


   <?php
   $query = "SELECT * FROM guru WHERE nip = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nis = $row['nip'];
?>

<div class="form-group">


 <div class="form-group">
      <label for="mapel">Paket:</label>
     <center><select size="1" class="form-control" id="paket" name="paket" >
     <option>A
     <option>B
      </select>
      </center>
      </div>



    <label for="email">Nama Lengkap:</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['nama']; ?>" readonly>
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
      <label for="gender">Mata Pelajaran:</label>
     <center><select size="1" id="mp" name="mp" class="form-control" >
     <option>Latihan Soal Bahasa Indonesia 1 
     <option>Latihan Soal Bahasa Indonesia 2
     <option>Latihan Soal Bahasa Indonesia 3
      <option>Latihan Soal Bahasa Indonesia 4
        <option>Latihan Soal Bahasa Indonesia 5
          <option>Latihan Soal Bahasa Indonesia Akhir
            <option>.................................................
             <option>Latihan Soal Bahasa Inggris 1 
     <option>Latihan Soal Bahasa Inggris 2
     <option>Latihan Soal Bahasa Inngris 3
      <option>Latihan Soal Bahasa Inggris 4
        <option>Latihan Soal Bahasa Inggris 5
          <option>Latihan Soal Bahasa Inggris Akhir
            <option>.................................................
             <option>Latihan Soal Matematika 1 
     <option>Latihan Soal  Matematika 2
     <option>Latihan Soal  Matematika 3
      <option>Latihan Soal  Matematika 4
        <option>Latihan Soal  Matematika 5
          <option>Latihan Soal Matematika Akhir
         <option>.................................................
             <option>Latihan Soal IPA 1 
     <option>Latihan Soal  IPA 2
     <option>Latihan Soal  IPA 3
      <option>Latihan Soal  IPA 4
        <option>Latihan Soal  IPA 5
          <option>Latihan Soal IPA Akhir
         <option>.................................................
             <option>Latihan Soal IPS 1 
     <option>Latihan Soal  IPS 2
     <option>Latihan Soal  IPS 3
      <option>Latihan Soal IPS 4
        <option>Latihan Soal  IPS 5
          <option>Latihan Soal IPS Akhir

         <option>.................................................
             <option>Latihan Soal Tryout Bahasa Indonesia
     <option>Latihan Soal  Tryout Bahasa Inggris
     <option>Latihan Soal  Tryout IPA
      <option>Latihan Soal Tryout IPS
        <option>Latihan Soal  Tryout Matematika
          
      </select>
      </center>
      </div>


<div class="form-group">
    <label for="email">soal:</label>
    <textarea class="form-control" rows="5" id="soal" name="soal"></textarea style="background-color:white;">
  </div>

<div class="form-group">
    <label for="email">Pilihan a:</label>
    <input type="text" class="form-control" id="a" name="a">
  </div>

  <div class="form-group">
    <label for="email">Pilihan b:</label>
    <input type="text" class="form-control" id="b" name="b">
  </div>

<div class="form-group">
    <label for="email">Pilihan c:</label>
    <input type="text" class="form-control" id="c" name="c">

  <div class="form-group">
    <label for="email">Pilihan d:</label>
    <input type="text" class="form-control" id="d" name="d">
  </div>
 
<div class="form-group">
    <label for="email">Pilihan e:</label>
    <input type="text" class="form-control" id="e" name="e">
  </div>
<div class="form-group">
    <label for="email">Kunci Jawaban:</label>
    <input type="text" class="form-control" id="kj" name="kj" placeholder="Ex: a">
  </div>

  <div class="form-group">
    <label for="email">gambar:</label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
  </div>
 <div class="form-group">
    <label for="email">Tanggal:</label>
    <input type="date" class="form-control" id="tgl1" name="tgl1">
  </div>

  <div class="form-group">
      <label for="mapel">Aktifkan Soal:</label>
     <center><select size="1" class="form-control" id="aktifsoal" name="aktifsoal" >
     <option>Y
     <option>N
     
      </select>
      </center>
      </div>




    



  <button type="submit" class="btn btn-primary">Upload Soal</button>
</form><br><br>
<div class="well well-sm">PAKET SOAL</div>
<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">
      <form action="../config/paket.php" method="POST">

<div class="form-group">
      <label for="gender">Mata Pelajaran:</label>
     <center><select size="1" id="mp" name="mp" class="form-control" >
     <option>Latihan Soal Bahasa Indonesia 1 
     <option>Latihan Soal Bahasa Indonesia 2
     <option>Latihan Soal Bahasa Indonesia 3
      <option>Latihan Soal Bahasa Indonesia 4
        <option>Latihan Soal Bahasa Indonesia 5
          <option>Latihan Soal Bahasa Indonesia Akhir
            <option>.................................................
             <option>Latihan Soal Bahasa Inggris 1 
     <option>Latihan Soal Bahasa Inggris 2
     <option>Latihan Soal Bahasa Inngris 3
      <option>Latihan Soal Bahasa Inggris 4
        <option>Latihan Soal Bahasa Inggris 5
          <option>Latihan Soal Bahasa Inggris Akhir
            <option>.................................................
             <option>Latihan Soal Matematika 1 
     <option>Latihan Soal  Matematika 2
     <option>Latihan Soal  Matematika 3
      <option>Latihan Soal  Matematika 4
        <option>Latihan Soal  Matematika 5
          <option>Latihan Soal Matematika Akhir
         <option>.................................................
             <option>Latihan Soal IPA 1 
     <option>Latihan Soal  IPA 2
     <option>Latihan Soal  IPA 3
      <option>Latihan Soal  IPA 4
        <option>Latihan Soal  IPA 5
          <option>Latihan Soal IPA Akhir
         <option>.................................................
             <option>Latihan Soal IPS 1 
     <option>Latihan Soal  IPS 2
     <option>Latihan Soal  IPS 3
      <option>Latihan Soal IPS 4
        <option>Latihan Soal  IPS 5
          <option>Latihan Soal IPS Akhir

         <option>.................................................
             <option>Latihan Soal Tryout Bahasa Indonesia
     <option>Latihan Soal  Tryout Bahasa Inggris
     <option>Latihan Soal  Tryout IPA
      <option>Latihan Soal Tryout IPS
        <option>Latihan Soal  Tryout Matematika
          
      </select>
      </center>
      </div>

     <div class="form-group">
    <label for="email">Nomor Induk Siswa:</label>
    <input type="text" class="form-control" id="nis" name="nis" placeholder="Ex: 201810896" onkeyup="autofill()">
     </div>


<div class="form-group">
      <label for="mapel">Paket:</label>
     <center><select size="1" class="form-control" id="paket" name="paket" >
     <option>A
     <option>B
      </select>
      </center>
      </div>


<div class="form-group">
      <label for="gender">Mata Pelajaran:</label>
     <center><select size="1" id="mp1" name="mp1" class="form-control" >
     <option> Bahasa Indonesia 1 
     <option> Matematika
     <option> Bahasa Inggris
     <option> Ilmu Pengetahuan Alam
     <option> Ilmu Pengatuhan Sosial
     <option> Matematika
     <option> PLH
     <option> PAI
     <option> PENJASKES
     <option> PPKN
    
    
      </select>
      </center>
      </div>


      <button type="submit" class="btn btn-primary">Simpan</button>
      </form>


      </div>
      </div>
      </div>




<div class="well well-sm">Import Soal </div><br>

<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">

<form method="POST" action="../config/import_soal.php" enctype="multipart/form-data">
  <table  >

    <tr valign="top">
      <td width="120">File Import</td>
      <td width="10">:</td>
      <td><input type="file" name="filename" style="width: 300px;" required></td>
    </tr>
    <tr>
      <td colspan="3"><button type="submit" name="submit">IMPORT</button>
      </td>
    </tr>
  </table>
</form><br>
</div>
</div><br><hr />



<div class="well well-sm">Lihat Soal Yang DiUpload </div><br>

<div class="panel-group">
    <div class="panel panel-info">
     
      <div class="panel-body">


<button type="button" class="btn btn-primary"><a href="guru.php?halaman=editsoal"><font color="white"><b>Lihat Soal </b></font></a> </button>
 </div>
 </div>



</div>
</div>
</div>
</div>
</div>
</div>