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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rp. 50.000,-</td>
                            <td>Januari</td>
                            <td>2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>