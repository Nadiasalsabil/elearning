<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Learning| Smp N 34 Bekasi</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educative Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


<script src="../tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:"textarea"});</script> 
<!--//web-fonts-->
<!--//fonts-->

</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<div class="container">

			<!-- navigation -->
			<nav class="navbar navbar-default " >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>				  
				<div class="w3-logo">
					<h3><a href="#">E-Learning </h3> <br>
					<font size="4px">SMP Negeri 34 Bekasi</font></a>
					
				</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
				 	<li><a href="7-1.php?halaman=nilai"><i class="fa fa-wpforms" style="font-size:24px"></i>&nbsp;NILAI</a></li>
					
					
					
				
				
					
			
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			<div class="clearfix"></div>
		<!-- //navigation -->
			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-info">
							<h3>E-Learning SMP Negeri 34 Bekasi</h3>
							<h4> Successful career starts with good education</h4>
						
						</div>
					</li>
					<li>
					
						<div class="slider-info">
							 <h3>E-Learning SMP Negeri 34 Bekasi</h3>
							<h4> Make the best choice for your education</h4>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>E-Learning SMP Negeri 34 Bekasi</h3>
							<h4> Successful career starts with good education</h4>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>Preparing for successful future</h3>
							<h4> Make the best choice for your education</h4>
						   
						</div>
					</li>

				</ul>
				
			</div>
			<div class="clearfix"></div>	
		</div>
	</div>
<!-- //banner -->
<!--services-section-->
<div class="services-w3layouts" id="services">
	<div class="container">	
	
<?php
 include '../config/koneksi.php';

       if(isset($_POST['submit'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysqli_query($konek,"select * from soal where id_soal='$nomor' and kunci_jawaban='$jawaban'")or die(mysqli_error());
					
					$cek=mysqli_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				/*RUMUS
				Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
				hasil= 100 / jumlah soal * jawaban yang benar
				*/
				
				$result=mysqli_query($konek,"select * from soal WHERE aktif='Y'") or die(mysqli_error($konek));
				$jumlah_soal=mysqli_num_rows($result);
				$score = 100/$jumlah_soal*$benar;
				$hasil = number_format($score,1);
			}
		}

		//Lakukan Penyimpanan Kedalam Database
	 
	
		?>

<?php

session_start();

include '../config/koneksi.php';

$query = "SELECT * FROM siswa WHERE nis = '".$_SESSION['username']."' ";
$exec = mysqli_query($konek, $query) or die(mysqli_error($konek));
$row = mysqli_fetch_array($exec);

$nis = $row['nis'];

?>

 <form action="../config/nilaiquis.php" method="post">
  <div class="form-group">
    <label for="email">Nomor Induk Siswa:</label>
    <input type="text" class="form-control" readonly id="nis" name="nis" value="<?php echo $row['nis']; ?>">
  </div>

  <div class="form-group">
    <label for="email">Kelas:</label>
    <input type="text" class="form-control" readonly id="kls" name="kls" value="<?php echo $row['id_kelas']; ?>" >
  </div>

   <div class="form-group">
    <label for="email">Nama:</label>
    <input type="text" class="form-control" readonly id="nama" name="nama" value="<?php echo $row['nama']; ?>">
  </div>

  <div class="form-group">
    <label for="email">Mata Pelajaran:</label>
    <input type="text" class="form-control" readonly id="mp" name="mp" value="Latihan Soal Matematika 5" >
  </div>

   <div class="form-group">
    <label for="email">Jawaban Benar:</label>
    <input type="text" class="form-control" readonly id="jb" name="jb" value=<?php echo "$benar";?>>
  </div>

  <div class="form-group">
    <label for="email">Jawaban Salah:</label>
    <input type="text" class="form-control" readonly id="js" name="js" value=<?php echo "$salah";?>>
  </div>

  <div class="form-group">
    <label for="email">Jawaban Kosong:</label>
    <input type="text" class="form-control" readonly id="jk" name="jk" value=<?php echo "$kosong";?>>
  </div>

  <div class="form-group">
    <label for="email">Nilai:</label>
    <input type="text" class="form-control" readonly id="ni" name="ni" value=<?php echo "$score";?>>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		


</div>
</div> 
<!--//services-section-->
<!--/reviews-->
	
<!-- mid -->


						
						<!-- //Modal1 -->
<!-- //mid -->

<!--sign-up-section-->
	
<!--//sign-up-section-->
<!-- gallery -->

	<!-- //gallery -->
<!-- Footer -->

			<div class="copyright-wthree">
				<p>&copy; 2018 E-Learning . All Rights Reserved | SMP Negeri 34 Bekasi </a></p>
			</div>
<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 
							 
							 <script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider1").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!--gallery-->

<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--gallery-->



 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->




<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><i class="fa fa-mortar-board" style="font-size:48px;color:#1ca0de"></i></center>
       <h4><font color="#1ca0de"> E-LEARNING <br>
		
          <font color="#1ca0de"> SMP Negeri 34 Bekasi </h4>
          <center><font color="black">Jl. Wibawa Mukti IV No.32, Jatimekar, Jatiasih, Kota Bks, Jawa Barat 17422</font></center>

        </div>
        <div class="modal-body">
          <center><p><b><font color="#1ca0de"> Silahkan Login </b></p></center></font><hr />

          <form action="/action_page.php">
  				<div class="form-group">
   				 <label for="email">Username:</label>
   				 <input type="text" class="form-control" name="user" style="background-color:#AFEEEE; color: white; ">
  				</div>
  
  			<div class="form-group">
   				<label for="pwd">Password:</label>
   				 <input type="password" class="form-control" name="pwd" style="background-color:#AFEEEE; color: white; ">
 				 </div>
 
 				 <div class="checkbox">
   				 <label><input type="checkbox"> Remember me</label>
  						</div>
 
 				<center> <button type="button" class="btn btn-info btn-lg" >Login</button></center>
				</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>