<?php include '../koneksi.php';?>
<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div align="center" class="card-header">
                    <h3 class="card-title">Data Siswa Baru<br>SMP Negeri 1 Pasirjambu<br>Tahun Ajaran 2022/2023</h3>
                    </div>
                    <div class="card-body">
                    <table border=1 cellpadding=5 cellspacing=0 id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Nama Ayah</th>
                            <th>Alamat</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Ijazah</th>
                            <th>File Ijazah</th>
                        </tr>
                        <?php
                        $no=1;
                        $sql = mysqli_query($con, "SELECT * FROM daftar WHERE status='diterima'");
                        while($data=mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $data['nama']?></td>
                            <td><?= $data['tempatLahir']?></td>
                            <td><?= $data['tanggalLahir']?></td>
                            <td><?= $data['namaIbu']?></td>
                            <td><?= $data['namaAyah']?></td>
                            <td><?= $data['alamat']?></td>
                            <td><?= $data['asalSekolah']?></td>
                            <td><?= $data['nilaiIjazah']?></td>
                            <td><?= $data['file']?></td>
                        </tr>
                        <?php $no++;
                        }
                        ?>
                        <tr>
        </div>
      </div>
    </section>
  </div>

<script>
 window.print();
</script>
