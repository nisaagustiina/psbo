<?php
include'../koneksi.php';

$id	= $_GET['id'];

mysqli_query($con," UPDATE daftar set status='diterima' WHERE id='$id'"
);
header("location:../index_admin.php?p=status");
?>