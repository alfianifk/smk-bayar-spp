<section class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="mt-2 card">
            <div class="card-header">
                <div class="card-title">Tagihan SPP-ku</div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($spp as $a) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['bulan']; ?></td>
                            <td><?= $a['tahun']; ?></td>
                            <td><?= $a['nominal']; ?></td>
                            <td>
                                <a href="<?= base_url('siswa/rincian/'); ?><?= $a['id_spp']; ?>" class="badge badge-primary">Lihat Rincian</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>