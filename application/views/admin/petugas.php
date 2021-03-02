<section class="content">
    <div class="container-fluid">
        <a href="#" class="btn btn-sm btn-primary">Tambah Data</a>
        <div class="mt-3">
            <div class="">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa/Siswi SMK As-syafi'iyah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    <?php foreach($petugas as $p) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['username']; ?></td>
                    <td><?= $p['password']; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['level']; ?></td>
                    <td>
                    <a href="<?= base_url('administrator/editPetugas/'); ?><?= $p['id_petugas']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('administrator/deletePetugas/'); ?><?= $p['id_petugas']; ?>" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</section>