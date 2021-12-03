<?php
include'../koneksi.php';

$id	= $_GET['id'];

mysqli_query($con," UPDATE daftar set status='ditolak' WHERE id='$id'"
);
header("location:../index_admin.php?p=ditolak");
?>