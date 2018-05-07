<style>

.comments { 
  margin: 0 10px 0 5px; 
  padding: 7px 5px;
  background: #FAF7F5  no-repeat 0 2px;
  padding-left: 30px;
  color: #977C57;
}

ol.commentlist {
  margin: 12px 10px;
  padding: 0;
  border-style: solid;  
  border-color: #EEE8E1;  
  border-width: 1px 1px 0 1px;
}
.commentlist li {
  margin: 0;
  padding: 10px;
  list-style: none;
  border-bottom: 1px solid #EEE8E1; 
}
.commentlist li cite {
  display: block;
  font-style: normal;
 
  padding: 7px; 
}
.commentlist li cite img {
  float: left;
  margin-right: 10px; 
}
.commentlist li cite .comment-data {
  font-size: 3px;
  font-weight: normal;
}
.commentlist li .comment-text {
  clear: both;
  margin: 0; padding: 0;
}
.commentlist li.alt {
  background: white; 
}
.float-left  { float: left; }
.float-right { float: right; }
.align-left  { text-align: left; }
.align-right { text-align: right; }

/* display and additional classes */
.no-border { border: none; }
.clearer { clear: both; }
.clear {  display:inline-block; }
.clear:after {
  display:block; 
  visibility:hidden; 
  clear:both; 
  height:0; 
  content: "."; 
}



</style>


<center><font color="#1ca0de"> <h2>FORUM DISKUSI  </h2></font></center>
<center><i class="fa fa-user" style="font-size:70px"></i></center>
<center><font color="#1ca0de"> <h2>SMP Negeri 34 Bekasi </h2></font></center>
<center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih,
Kota Bks, Jawa Barat 17422</font></center>

<hr />


<div class="services-w3layouts" id="services">
<div class="container">



<div class="jumbotron" style="background-color: #E6E6FA;">
     <div class="well well-sm" style="background-color:#1ca0de; height:300px;width:1020px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;"> 
     
     <?php

    include '../config/koneksi.php';


    $tampil="SELECT id,nama , upload, diskusi FROM diskusi where id_kelas='9-1'";
    $hasil=mysqli_query($konek,$tampil)or die(mysqli_error($konek));
    
    
    while ($data=mysqli_fetch_array($hasil)) { ?>
 
      <ol class="commentlist">
       <li class="alt" id="comment-63"> <cite> 
        
   
      <img alt="" src="../images/2.png" class="avatar" height="40" width="40" />
  


         <?php echo $data['nama'] ?><br />



        <img src="<?php echo  $data['upload'] ?>">
          
          <div class=comment-text>
          <?php echo $data['diskusi'] ?>



 

   

           </div>
     
            
                       
        </li>
        </ol>  


           <?php
          }

           ?>
          </div>

   <div class="well well-sm" style="background-color:#1ca0de;"> 

   <form action="../config/diskusi-guru91.php" method="POST" enctype="multipart/form-data">
   <?php
   $query = "SELECT * FROM guru WHERE nip = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nip = $row['nip'];
?>
    <div class="form-group" >
    <label for="email"><font color="white"><b>Kelas:</b></font></label>
    <input type="text" class="form-control" readonly id="kelas" name="kelas" value="9-1" readonly style="background-color:white;">
  </div>
  <div class="form-group" >
    <label for="email"><font color="white"><b>Nama Lengkap:</b></font></label>
    <input type="text" class="form-control" readonly id="namal" name="namal" value="<?php echo $row['nama']; ?>" style="background-color:white;">
  </div>
 <div class="form-group">
  <label for="comment"><font color="white"><b>Diskusi:</b></font></label>
    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
  <textarea class="form-control" rows="5" id="disku" name="disku"></textarea style="background-color:white;">
</div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>


  



































</div>
</div>