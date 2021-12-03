<?php
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$namaIbu = $_POST['namaIbu'];
$namaAyah = $_POST['namaAyah'];
$alamat = $_POST['alamat'];
$asalSekolah = $_POST['asalSekolah'];
$nilaiIjazah = $_POST['nilaiIjazah'];
$status = "menunggu konfirmasi";
$ekstensi_boleh = array('pdf','jpg','jpeg','png');
$namaFile = $_FILES['file']['name'];
$x = explode('.', $namaFile);
$ekstensi = strtolower(end($x));
// $ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

if(isset($_POST['simpan'])){
    if(in_array($ekstensi, $ekstensi_boleh) == true) {
        move_uploaded_file($file_tmp, '../assets/upload/'.$namaFile);

        $sql = mysqli_query($con, "INSERT INTO daftar (id,nama,tempatLahir,tanggalLahir,namaIbu,namaAyah,alamat,asalSekolah,nilaiIjazah,file,status) VALUES ('$id','$nama','$tempatLahir','$tanggalLahir','$namaIbu','$namaAyah','$alamat','$asalSekolah','$nilaiIjazah','$namaFile','$status')");
        // print_r($sql);
        echo "<script>alert('Pendaftaran Berhasil!');
            window.location='../index_user.php?p=rd';</script>";
    }
}

?>