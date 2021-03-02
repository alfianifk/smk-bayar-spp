<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="nisn">NISN</label>
                              <input type="number" name="nisn" class="form-control" id="nisn" placeholder="NISN">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="nis">Nomor Induk Siswa</label>
                              <input type="number" name="nis" class="form-control" id="nis" placeholder="NIS">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nomor Telepon</label>
                                <input type="number" name="nama" class="form-control" id="nama" placeholder="Nomor Telepon">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kelas dan Bidang Keahlian</label>
                                <select name="id_kelas" class="form-control">
                                    <option value="2" >10 Rekayasa Perangkat Lunak</option>
                                    <option value="9" >10 Multimedia</option>
                                    <option value="6" >10 Otomatisasi Tata Kelola Perkantoran</option>
                                    <option value="3" >11 Rekayasa Perangkat Lunak</option>
                                    <option value="8" >11 Multimedia</option>
                                    <option value="5" >11 Otomatisasi Tata Kelola Perkantoran</option>
                                    <option value="1" >12 Rekayasa Perangkat Lunak</option>
                                    <option value="7" >12 Multimedia</option>
                                    <option value="4" >12 Otomatisasi Tata Kelola Perkantoran</option>
                                </select>
                        </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</section>