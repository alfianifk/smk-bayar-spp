<section class="content">
    <div class="container-fluid">
        <a href="<?= base_url('administrator/tambahSpp'); ?>" class="mb-3 btn btn-sm btn-primary">Tambah Data</a>
        <?= $this->session->flashdata('message'); ?>
        <div class="mt-3 card">
            <div class="card-header">
                <div class="card-title">Data SPP tahun <?= date("Y"); ?></div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nominal</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($spp as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>Rp. <?= $s['nominal'] ?>,-</td>
                            <td><?= $s['bulan']; ?></td>
                            <td><?= $s['tahun']; ?></td>
                            <td>
                            <a href="<?= base_url('administrator/editSpp/'); ?><?= $s['id_spp']; ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('administrator/deleteSpp/'); ?><?= $s['id_spp']; ?>" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>