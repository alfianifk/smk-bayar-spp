<section class="content">
    <div class="container-fluid">
        <a href="<?= base_url('administrator/tambahSiswa'); ?>" class="mb-3 btn btn-sm btn-primary">Tambah Data</a>
        <?= $this->session->flashdata('message'); ?>
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
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Kompetensi Keahlian</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    <?php foreach($siswa as $s) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $s['nis']; ?></td>
                    <td><?= $s['nisn']; ?></td>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['kelas']; ?></td>
                    <td><?= $s['kompetensi_keahlian']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td><?= $s['no_telp']; ?></td>
                    <td>
                      <a href="<?= base_url('administrator/editSiswa/'); ?><?= $s['nisn']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                      <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('administrator/deleteSiswa/'); ?><?= $s['nisn']; ?>" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
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