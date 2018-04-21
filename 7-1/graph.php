
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Bootstrap Graph Using Highcharts </title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	<script src="assets/js/jquery-1.10.1.min.js"></script>
	<script src="assets/js/highcharts.js"></script>
	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Grafik Nilai Semester I '
				 },
				 xAxis: {
					categories: ['Mata Pelajaran']
				 },
				 yAxis: {
					title: {
					   text: 'Nilai / Mata Pelajaran'
					}
				 },
					  series:             
					[
						<?php 
						include "../config/koneksi.php";
						$sql   = "SELECT mapel  FROM nilai where  nis='201810896'";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error($con));
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$trendbrowser=$temp['mapel'];                     
							$sql_total   = "SELECT absen,tugas,uts,uas,rata FROM nilai WHERE mapel='$trendbrowser'";        
							$query_total = mysqli_query($con,$sql_total ) or die(mysql_error());
							while( $data = mysqli_fetch_array( $query_total ) )
							{
								$total = $data['rata'];                 
							}             
						?>
							{
							  name: '<?php echo $trendbrowser; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>
</head>
<body>

</br></br></br></br>
<!--- Bagian Judul-->	
<div class="container" style="margin-top:20px">
	<div class="col-md-7">
		<div class="panel panel-primary">
			<div class="panel-heading">Grafik Perkembangan Nilai Semester 1</div>
				<div class="panel-body">
					<div id ="mygraph"></div>
				</div>
		</div>
	</div>
</div>

</body>
</html>
