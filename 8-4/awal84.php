<div class="services-w3layouts" id="services">
	<div class="container">	
<center><i class="fa fa-book" aria-hidden="false" style="font-size:70px" ></i></center><br>
<h5 class="title-w3">SELAMAT DATANG DI SISTEM E-LEARNING <br>
	SMP NEGERI 34 BEKASI
</h5><hr />

<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"><b>E-Learning SMP Negeri 34 Bekasi</b></div>
      <div class="panel-body">

      	Selamat Datang di sistem E-Learning SMP Negeri 34 Bekasi. Sistem E-Learning ini berguna untuk mempermudah siswa SMP Negeri 34 Bekasi dalam mengakses mata pelajaran disekolah. selain itu siswa juga dapat melakukan latihan soal-soal
</div>
</div><br><br>
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"><b>Tidak / Mengganti Password</b></div>
      <div class="panel-body">
         <form action="../config/updatepassword1.php" method="post">
          <?php
   $query = "SELECT * FROM login WHERE nis = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nis = $row['nis'];
?>
  

<div class="form-group">


   
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" >
  </div>

<div class="form-group">


    <label for="email">Username:</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username']; ?>" readonly>
  </div>

  <div class="form-group">
    <label for="email">Password:</label>
    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>">
  </div>

  <button type="submit" class="btn btn-info btn-md"> Ganti Password</button>

         </form>
</div>
</div><br><br>
<div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading"><b>Panduan E-Learning SMP Negeri 34 Bekasi</b></div>
      <div class="panel-body">

      <div class="well well-sm">Cara Mengakses E-Learning</div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <text align="justify">Untuk mengakses E-Learning siswa harus mengunjungi website di <u> <font color="blue">www.E-Learning SMP Negeri 34 Bekasi </u> </font>setelah itu siswa login terlebih dahulu. Siswa dapat login dengan memakai NIS sebagai username dan Tanggal lahir sebagai password. Setelah itu siswa dapat mengakses E-Learning dan pada E-learning siswa dapat mengganti password. Pada sistem ini juga terdapat Fitur E-learning. Berikut Fitur - fitur yang terdapat pada E-Learning :</text><br><br>

  <div class="well well-sm"> Ganti Password</div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Siswa dapat Langsung mengganti Password dengan cara menuliskan kembali password yang diinginkan lalu klik button Ganti Password.<br><br>


  <div class="well well-sm">Menu Mapel</div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada fitur Mapel siswa dapat mengerjakan Soal - soal online dan mendownload materi - materi Pelajaran. caranya yaitu dengan cara mengklik atau memilih mata pelajaran yang akan dikerjakan soalnya atau materi yang ingin didownload. soal - soal yang dapat dikerjakan adalah soal mata pelajaran Bahasa Indonesia , Bahasa Inggris , Ilmu Pengetahuan Alam , Ilmu Pengetahuan Sosia dan Matematika. sedangkan untuk materi yang bisa didownload adalah semua mata pelajaran yang diajarkan di SMP Negeri 34 Bekasi. <br><br>

 <div class="well well-sm">Menu Nilai</div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada fitur menu nilai siswa dapat melihat Nilai . yaitu Nilai Mata pelajaran Semester I , Semester II dan Nilai dari Soal - soal latihan online yang telah dikerjakan. siswa juga dapat melihat perkembangan grafik belajarnya.<br><br>


 <div class="well well-sm">Menu Jadwal</div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada Menu Jadwal siswa dapat melihat Jadwal KBM (Kegiatan Belajar Mengajar) perharinya , kegiatan KBM dilaksananakan pada hari Senin s.d Jumat. Tentunya hal ini dapat memudahkan siswa dalam melihat jadwal pelajaran disekolah.

<br><br>

 <div class="well well-sm">Menu Tugas</div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada Menu Tugas Siswa dapat mengupload tugas - tugas sekolah yang telah diberikan oleh guru dengan cara mengisi setiap form dan mengirim atau mengupload file tugas. <br><br>


 <div class="well well-sm"> Menu Diskusi</div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pada Menu Diskusi Siswa dapat Berinteraksi dengan teman atau guru yang mengajar. tetapi hanya dapat berinteraksi dengan teman sekelas saja dan guru yang mengajar dikelas tersebut, dimohon agar menggunakan bahasa yang sopan & Santun.<br><br>


</div>





</div><br><br>


</div>
</div>
</div>
</div>
</div>
