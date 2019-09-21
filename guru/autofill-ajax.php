<?php
include '../congfig/koneksi.php';
$nis = $_GET['nis'];

$sql = mysqli_query($konek, "SELECT AVG(nilai) as nilaii FROM  nilaiquis where nis = '$nis' ");
$mhs = mysqli_fetch_array($sql);
$data = array(
    'nilaii' => $mhs['nilaii']
);
echo json_encode($data);
?>
