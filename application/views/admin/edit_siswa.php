<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <a href="<?= base_url('administrator/siswa'); ?>" class="mb-3 btn btn-sm btn-primary">Kembali</a>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <label for="nisn">NISN</label>
                              <input type="number" required name="nisn" class="form-control" id="nisn" placeholder="NISN" value="<?= $siswa['nisn'] ?>">
                              <?= form_error('nisn', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="nis">Nomor Induk Siswa</label>
                              <input type="number" required name="nis" class="form-control" id="nis" placeholder="NIS" value="<?= $siswa['nis'] ?>">
                              <?= form_error('nis', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" required name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?= $siswa['nama'] ?>">
                                <?= form_error('nama', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="telp">Nomor Telepon</label>
                                <input type="number" required name="telp" class="form-control" id="telp" placeholder="Nomor Telepon" value="<?= $siswa['no_telp'] ?>">
                                <?= form_error('telp', '<p class="pl-2 text-danger">', '</p>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                            <label>Kelas dan Bidang Keahlian</label>
                                <select required name="id_kelas" class="form-control">
                                    <option value="2" <?php ($siswa['id_kelas'] == 2)? print 'selected' : print ' '; ?> >10 Rekayasa Perangkat Lunak</option>
                                    <option value="9"  <?php ($siswa['id_kelas' == 9]) ? print 'selected' : print ' '; ?> >10 Multimedia</option>
                                    <option value="6" >10 Otomatisasi Tata Kelola Perkantoran</option>
                                    <option value="3" >11 Rekayasa Perangkat Lunak</option>
                                    <option value="8" >11 Multimedia</option>
                                    <option value="5" >11 Otomatisasi Tata Kelola Perkantoran</option>
                                    <option value="1"  <?php ($siswa['id_kelas' == 1]) ? print 'selected' : print ' '; ?> >12 Rekayasa Perangkat Lunak</option>
                                    <option value="7" >12 Multimedia</option>
                                    <option value="4" >12 Otomatisasi Tata Kelola Perkantoran</option>
                                </select>
                        </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea required name="alamat" class="form-control"><?= $siswa['alamat'] ?></textarea>
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