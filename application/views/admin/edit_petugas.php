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
                <h3 class="card-title">Edit Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" required name="username" class="form-control" id="username" placeholder="Username" value="<?= $petugas['username']; ?>">
                                <?= form_error('username', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" readonly name="password" class="form-control" id="password" placeholder="Password" value="<?= $petugas['password'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="<?= $petugas['nama']; ?>">
                                <?= form_error('nama', '<p class="pl-2 text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Level</label>
                                    <select required name="level" class="form-control">
                                        <option <?= ($petugas['level'] == 'admin') ? print 'selected' : print ' '; ?> value="admin" >Admin</option>
                                        <option <?= ($petugas['level'] == 'petugas') ? print 'selected' : print ' '; ?> value="petugas" >Petugas</option>
                                    </select>
                                    <?= form_error('level', '<p class="pl-2 text-danger">', '</p>') ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Akses</label>
                                    <select required name="role" class="form-control">
                                        <option <?= ($petugas['role'] == 2) ? print 'selected' : print ' '; ?> value="2" >Full</option>
                                        <option <?= ($petugas['role'] == 1) ? print 'selected' : print ' '; ?> value="1" >Terbatas</option>
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