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
              <li class="breadcrumb-item active">Form Pendaftaran</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Form Pendaftaran</h3>
                </div>
                <form class="form-horizontal" method="post" action="proses/daftar.php" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input name="user" readonly type="text" class="form-control" id="inputEmail3" value="<?= $_SESSION['user']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Pendaftaran</label>
                        <div class="col-sm-10">
                        <input  name="id" readonly type="text" class="form-control" id="inputEmail3" value="<?= $_SESSION['id']?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input name="nama" type="text" class="form-control" id="inputEmail3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                        <input name="tempatLahir" type="text" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                        <input name="tanggalLahir" type="date" min="2009-01-01" max="2010-06-01" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Ibu</label>
                        <div class="col-sm-10">
                        <input name="namaIbu" type="text" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Ayah</label>
                        <div class="col-sm-10">
                        <input name="namaAyah" type="text" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea name="alamat" id="" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                        <input name="asalSekolah" type="text" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nilai Ujian</label>
                        <div class="col-sm-10">
                        <input name="nilaiIjazah" type="text" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Upload File<br><small >*PDF, JPG, JPEG, PNG</small></label>
                        <div class="col-sm-10">
                        <input name="file" type="file" class="form-control" id="inputPassword3" >
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10" align="right">
                      <button type="submit" name="simpan" class="btn btn-info" onclick="return confirm('Apakah yakin data anda sudah benar?')">Submit</button>
                      </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
      </div>
    </section>
</div>