<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <a href="<?= base_url('administrator/petugas'); ?>" class="mb-3 btn btn-sm btn-primary">Kembali</a>
            <div class="alert alert-warning">
                Pilih akses <b>terbatas</b> untuk Petugas dan <b>Full</b> untuk Admin!
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" required name="username" class="form-control" id="username" placeholder="Username">
                                <?= form_error('username', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" required name="password" class="form-control" id="password" placeholder="Password">
                                <?= form_error('password', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama">
                                <?= form_error('nama', '<p class="pl-2 text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Level</label>
                                    <select required name="level" class="form-control">
                                        <option value="admin" >Admin</option>
                                        <option value="petugas" >Petugas</option>
                                    </select>
                                    <?= form_error('level', '<p class="pl-2 text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Akses</label>
                                    <select required name="role" class="form-control">
                                        <option value="1" >Full</option>
                                        <option value="2" >Terbatas</option>
                                    </select>
                                    <?= form_error('role', '<p class="pl-2 text-danger">', '</p>') ?>
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