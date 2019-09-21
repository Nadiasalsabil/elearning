<?php
  
  include '../config/koneksi.php';

  session_start();

  if (!isset($_SESSION['username'])){
header("Location:../index.php");
}

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "guru";

?>




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
					<h3><a href="guru.php?halaman=awalguru">E-Learning </h3> <br>
					<font size="4px">SMP Negeri 34 Bekasi</font></a>
					
				</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
				 	
					
					<li><a href="guru.php?halaman=teacher"><i class="fa fa-book" style="font-size:24px"></i>&nbsp;GURU</a></li>
					
				
					
					<li class="dropdown">
					  <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wpforms" style="font-size:24px"></i>&nbsp;NILAI<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="background-color: white;">
						<li><a href="guru.php?halaman=inputnilai"><b>Input Nilai</b></a></li>
						<li><a href="guru.php?halaman=editnilai"><b>Edit Nilai </b></a></li>
						<li><a href="guru.php?halaman=latihansoal"><b>Latihan Soal Online </b></a></li>
						

						</ul>
					</li>


					 
					
					<li><a href="guru.php?halaman=tugas"><i class="fa fa-wpforms" style="font-size:24px"></i>&nbsp;TUGAS</a></li>
					<li><a href="guru.php?halaman=jadwal"><i class="fa fa-mortar-board" style="font-size:24px;"></i>&nbsp;JADWAL </a></li>
					
					

					<li class="dropdown">
					  <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="font-size:24px"></i>&nbsp;DISKUSI<span class="caret"></span></a>
					  <ul class="dropdown-menu" style="background-color: white;">
						<li><a href="guru.php?halaman=diskusi71"><b>7-1</b></a></li>
						<li><a href="#"><b>7-2</b></a></li>
						<li><a href="#"><b>7-3</b></a></li>
						<li><a href="#"><b>7-4</b></a></li>
						<li><a href="#"><b>7-5</b></a></li>
						<li><a href="#"><b>8-1</b></a></li>
						<li><a href="#"><b>8-2</b></a></li>
						<li><a href="#"><b>8-3</b></a></li>
						<li><a href="guru.php?halaman=diskusi84"><b>8-4</b></a></li>
						<li><a href="#"><b>8-5</b></a></li>
						<li><a href="guru.php?halaman=diskusi91"><b>9-1</b></a></li>
						<li><a href="#"><b>9-2</b></a></li>
						<li><a href="#"><b>9-3</b></a></li>
						<li><a href="#"><b>9-4</b></a></li>
						<li><a href="#"><b>9-5</b></a></li>
						

						





					  </ul>
					</li>
					<li><a href="../config/logout.php"><i class="fa fa-sign-out" style="font-size:24px"></i>&nbsp;LOGOUT</a></li>

					
					
					
					
				  </ul>
				
					
			
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			<div class="clearfix"></div>
		<!-- //navigation -->
			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		
<!-- //banner -->
<!--services-section-->
<div class="services-w3layouts" id="services">
	<div class="container">	
	
<?php


if ($halaman=='teacher')
include 'mapel.php';

if ($halaman=='inputnilai')
include 'inputnilai.php';

if ($halaman=='jadwal')
include 'jadwal.php';

if ($halaman=='diskusi71')
include 'diskusi71.php';

if ($halaman=='diskusi84')
include 'diskus84.php';

if ($halaman=='diskusi91')
include 'diskus91.php';

if ($halaman=='editnilai')
include 'editnilai.php';

if ($halaman=='tugas')
include 'tugas.php';

if ($halaman=='editsoal')
include 'editsoal.php';

if ($halaman=='awalguru')
include 'awalguru.php';

if ($halaman=='latihansoal')
include 'latihansoal.php';


?>

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