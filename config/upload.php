<?php
    
//error_reporting(0);

    include '../config/koneksi.php';

   $kelas = $_POST["idkelas"];
   $mapel = $_POST["mapel1"];
   $judul = $_POST["judul"];
   $tgs = $_POST['tgske'];
   $tgl = $_POST['tgl1'];


   $target_dir = "../tugas/";
   $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
   $uploadOk=1;
   $documentfiletype=pathinfo($target_file,PATHINFO_EXTENSION);

   if(isset($_POST["submit"])){

    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
            echo "File is an File - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an Document.";
            $uploadOk = 0;
        }
    }
    
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($documentfiletype != "docx" && $documentfiletype != "pdf" && $documentfiletype != "jpg"  && $documentfiletype != "png" && $documentfiletype != "gif" && $documentfiletype != "JPG" && $documentfiletype != "PNG" && $documentfiletype != "GIF") {
        echo "Sorry, only Doc and pdf files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an errors
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

 $input="INSERT INTO tugas(id,id_kelas,mapel,judul,tugas_ke,tanggal,file)values('','$kelas','$mapel','$judul','$tgs','$tgl','$target_file')";
    $updaterespon   = mysqli_query($konek, $input)or die(mysqli_error($konek));

    if ($updaterespon)
        {
            echo "<strong><center>Tugas Anda Berhasil Diuploads</center></strong>";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../7-1/7-1.php?halaman=tugas">';
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
