
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Calon Ditolak</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Data Calon Ditolak</h3>
                    </div>
                    <div class="card-body">
                      <table id="tabel" class="table table-responsive table-bordered table-striped">
                        <thead>
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
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $no=1;
                          $sql = mysqli_query($con, "SELECT * FROM daftar WHERE status='ditolak'");
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
                              <td><?= $data['status']?></td>
                          </tr>
                          <?php $no++;
                          }
                          ?> 
                          </tbody>
                      </table>
                    </div>
                  </div>
             </div>
          </div>
      </div>
    </section>
  </div>
  

<link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#tabel').DataTable();
});
</script>
