<?php
  
  include '../config/koneksi.php';

  session_start();

  if (!isset($_SESSION['username'])){
header("Location:../index.php");
}

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "soalindo1";

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Kita membutuhkan jquery, disini saya menggunakan langsung dari jquery.com, jquery ini bisa didownload dan ditaruh dilocal -->
 </head>
 
 
  <!-- Script Timer -->
    

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
<link href="css/stylesoal.css" rel="stylesheet" type="text/css" media="all" />
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
					<h3><a href="../7-1/7-1.php">E-Learning </h3> <br>
					<font size="4px">SMP Negeri 34 Bekasi</font></a>
					
				</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
				 	
					

					
					
					
				
				
					
			
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			<div class="clearfix"></div>
		<!-- //navigation -->



			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<?php


if ($halaman=='Latihan Soal Bahasa Indonesia 1')
include 'indo1.php';

if ($halaman=='Latihan Soal Bahasa Indonesia 2')
include 'indo2.php';

if ($halaman=='Latihan Soal Bahasa Indonesia 3')
include 'indo3.php';

if ($halaman=='Latihan Soal Bahasa Indonesia 4')
include 'indo4.php';

if ($halaman=='Latihan Soal Bahasa Indonesia 5')
include 'indo5.php';

if ($halaman=='Latihan Soal Bahasa Indonesia Akhir')
include 'indoakhir.php';


if ($halaman=='Latihan Soal Bahasa Inggris 1')
include 'inggris1.php';


if ($halaman=='Latihan Soal Bahasa Inggris 2')
include 'inggris2.php';

if ($halaman=='Latihan Soal Bahasa Inggris 3')
include 'inggris3.php';

if ($halaman=='Latihan Soal Bahasa Inggris 4')
include 'inggris4.php';

if ($halaman=='Latihan Soal Bahasa Inggris 5')
include 'inggris5.php';

if ($halaman=='Latihan Soal Bahasa Inggris Akhir')
include 'inggrisakhir.php';


if ($halaman=='Latihan Soal Matematika 1')
include 'matematika1.php';

if ($halaman=='Latihan Soal Matematika 2')
include 'matematika2.php';

if ($halaman=='Latihan Soal Matematika 3')
include 'matematika3.php';

if ($halaman=='Latihan Soal Matematika 4')
include 'matematika4.php';

if ($halaman=='Latihan Soal Matematika 5')
include 'matematika5.php';

if ($halaman=='Latihan Soal Matematika Akhir')
include 'matematikaakhir.php';


if ($halaman=='Latihan Soal IPA 1')
include 'ipa1.php';

if ($halaman=='Latihan Soal IPA 2')
include 'ipa2.php';

if ($halaman=='Latihan Soal IPA 3')
include 'ipa3.php';

if ($halaman=='Latihan Soal IPA 4')
include 'ipa4.php';

if ($halaman=='Latihan Soal IPA 5')
include 'ipa5.php';

if ($halaman=='Latihan Soal IPA Akhir')
include 'ipaakhir.php';


if ($halaman=='Latihan Soal IPS 1')
include 'ips1.php';

if ($halaman=='Latihan Soal IPS 2')
include 'ips2.php';

if ($halaman=='Latihan Soal IPS 3')
include 'ips3.php';

if ($halaman=='Latihan Soal IPS 4')
include 'ips4.php';

if ($halaman=='Latihan Soal IPS 5')
include 'ips5.php';



if ($halaman=='Latihan Soal IPS Akhir')
include 'ipsakhir.php';

?>	
	</div>
<!-- //banner -->
<!--services-section-->
<div class="services-w3layouts" id="services">
	<div class="container">	

	



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





      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>