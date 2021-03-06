<section class="content">
    <div class="container-fluid">
    <div class="row">
            <section class="col-lg-12 connectedSortable">
            <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-header">
                      Konfirmasi Pembayaran
                    </div>
                    <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <td>NISN</td>
                    <td>Nama</td>
                    <td>Bulan</td>
                    <td>Dibayar</td>
                    <td>Status</td>
                    <td>Bukti Pembayaran</td>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    <?php foreach($konfirmasi as $k) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $k['nisn']; ?></td>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['bulan_dibayar']; ?> <?= $k['tahun_dibayar']; ?></td>
                    <td><?= $k['tgl_bayar']; ?></td>
                    <td><?= $k['status'] ?></td>
                    <td>
                      <img class="img-fluid" style="max-width: 100px;" src="<?= base_url('assets/img/') ?><?= $k['bukti_pembayaran']; ?>" >
                    </td>
                    <td>
                      <a onclick="return confirm('Apakah anda yakin ingin mengkonfirmasi pembayaran ini?');" href="<?= base_url('administrator/accPembayaran/'); ?><?= $k['id_pembayaran']; ?>" class="badge badge-success">Konfirmasi</a>
                      <a onclick="return confirm('Apakah anda yakin ingin mengkonfirmasi pembayaran ini?');" href="<?= base_url('administrator/deletePembayaran/'); ?><?= $k['id_pembayaran']; ?>" class="badge badge-danger">Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
                </div>
            </section>
        </div>
    </div>
</section>