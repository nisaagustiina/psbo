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
              <li class="breadcrumb-item active">Data Login </li>
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
                    <h3 class="card-title">Data Login </h3>
                    </div>
                    <div class="card-body">
                    <table id="tabel" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        $sql = mysqli_query($con, "SELECT * FROM login WHERE level='2'");
                        while($data=mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $data['username']?></td>
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