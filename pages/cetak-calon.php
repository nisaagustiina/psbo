<?php 
session_start();
$id=$_SESSION['id'];
include '../koneksi.php';

?>

<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Cetak Kartu Pendaftaran</h3>
                    </div>
                    <div class="card-body">
                    <!-- <table border=1 cellpadding=5 cellspacing=0 id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Nama Ayah</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Ijazah</th>
                            <th>File Ijazah</th>
                        </tr> -->
                        <table border=1 cellpadding=5 cellspacing=0 width="50%">
                          <tr>
                            <td align="center">Kartu PPDB Online<br>SMP Negeri 1 Pasirjambu<br>Tahun Ajaran 2022/2023</td>
                          </tr>
                          <tr>
                            <td>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM daftar WHERE id='$id'");
                        while($data=mysqli_fetch_array($sql)){
                   
                        
                            echo '<p>No Pendaftaran : '. $data['id'].'</p>
                            <p>Nama : '.$data['nama'].'</p>
                            <p>Tempat Lahir : '. $data['tempatLahir'].'</p>
                            <p>Tanggal Lahir : '. $data['tanggalLahir'].'</p>
                            <p>Nama Ibu : '. $data['namaIbu'].'</p>
                            <p>Nama Ayah : '. $data['namaAyah'].'</p>
                            <p>Alamat : '. $data['alamat'].'</p>
                            <p>Asal Sekolah : '. $data['asalSekolah'].'</p>
                            <p>Nilai Ijazah : '. $data['nilaiIjazah'].'</p>
                            <p>File : '. $data['file'].'</p>';
                       
                        }
                        ?>
                        </td>
                      </tr>
                        </table>
                       
        </div>
      </div>
    </section>
  </div>

<script>
 window.print();
</script>
