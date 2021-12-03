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
              <li class="breadcrumb-item active">Status Pendaftaran</li>
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
                    <h3 class="card-title">Status Pendaftaran</h3>
                    </div>
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Status Pendaftaran</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                        <tr>
                            <td>
                              <?php
                              $q=mysqli_query($con, "SELECT * FROM daftar WHERE status='diterima'");
                              $data=mysqli_num_rows($q);
                              echo "Diterima <i class=\"badge bg-info\">$data</i>"; 
                              ?>
                            </td>
                            <td><a href="index_admin.php?p=siswa"><button type="button" class="btn btn-info btn-xs">Detail</button></a></td>
                        </tr>
                        <tr>
                            <td>
                            <?php
                              $q=mysqli_query($con, "SELECT * FROM daftar WHERE status='ditolak'");
                              $data=mysqli_num_rows($q);
                              echo "Ditolak <i class=\"badge bg-danger\">$data</i>"; 
                              ?>
                            </td>
                            <td><a href="index_admin.php?p=ditolak"><button type="button" class="btn btn-info btn-xs">Detail</button></a></td>
                        </tr>
                        <tr>
                          <td>
                            <?php
                              $q=mysqli_query($con, "SELECT * FROM daftar WHERE status='cadangan'");
                              $data=mysqli_num_rows($q);
                              echo "Cadangan <i class=\"badge bg-warning\">$data</i>"; 
                              ?>
                            </td>
                            <td><a href="index_admin.php?p=cadangan"><button type="button" class="btn btn-info btn-xs">Detail</button></a></td>
                        </tr>
                        <tr>
                            <td>
                            <?php
                              $q=mysqli_query($con, "SELECT * FROM daftar WHERE status='menunggu konfirmasi'");
                              $data=mysqli_num_rows($q);
                              echo "Menunggu Konfirmasi <i class=\"badge bg-secondary\">$data</i>"; 
                              ?>
                            </td>
                            <td><a href="index_admin.php?p=nunggu"><button type="button" class="btn btn-info btn-xs">Detail</button></a></td>
                        </tr>
                    </table>
                    </div>    
                  </div>    
              </div>
        </div>
      </div>
    </section>
  </div>
