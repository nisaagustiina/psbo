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
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- <?php
    $sql = mysqli_query($con, "SELECT * FROM daftar");
    $data=mysqli_num_rows($sql);
    ?> -->

    <section class="content">
      <div class="container-fluid">
      <div class="col-12">
            <div class="card-info">
                <div class="card-header" align="center">
                  <h3>Hi,  <?=$_SESSION['user']?> !</h3>
                  <h3 >Selamat datang di Sistem Informasi PPDB Online </h3>
                  <h3 >SMP Negeri 1 Pasirjambu</h3>
                  <h4 >Tahun Ajaran 2022/2023</h4>
                </div>
              </div>
          </div>   <br><br><br>
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Pendaftar</h4>
                <?php
                $q=mysqli_query($con, "SELECT * FROM daftar");
                $data=mysqli_num_rows($q);
                echo $data; ?><br><br>
              </div>
              <div class="icon">
                <i class="fas fa-list-alt"></i>
              </div>
              <a href="index_admin.php?p=calon" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Status Pendaftaran</h4>
                <br><br>
              </div>
              <div class="icon">
                <i class="fa fa-edit"></i>
              </div>
              <a href="index_admin.php?p=status" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4>Siswa Baru</h4>
                <?php
                $q=mysqli_query($con, "SELECT * FROM daftar WHERE status='diterima'");
                $data=mysqli_num_rows($q);
                echo $data; ?><br><br>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="index_admin.php?p=siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>