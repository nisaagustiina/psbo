<?php
date_default_timezone_set('Asia/Jakarta');

$con = mysqli_connect("localhost","root","","psbo");
if(!$con ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>