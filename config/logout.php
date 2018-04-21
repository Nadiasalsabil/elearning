<?php
session_start();

unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Yakin Anda Akan Logout dari halaman ini?')</script>";
echo "<meta http-equiv='refresh' content='1 url=../index.php?halaman=beranda'>";
?>
