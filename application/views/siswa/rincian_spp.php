<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-title">Rincian Pembayaran bulan <b><?= $pembayaran['bulan_dibayar']; ?></b> </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" readonly value="<?= $this->session->userdata['nama'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="text" class="form-control" readonly value="<?= $this->session->userdata['username'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bulan">Bulan/Tahun</label>
                                    <input type="text" class="form-control" readonly value="<?= $pembayaran['bulan_dibayar']; ?>, <?= $pembayaran['tahun_dibayar']; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nis">Nominal</label>
                                    <input type="text" class="form-control" readonly value="<?= $pembayaran['jumlah_bayar']?> ">
                                </div>
                            </div>
                            <?php if($pembayaran == NULL) : ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nis">Status</label>
                                    <input type="text" class="form-control text-danger" readonly value="Belum dibayar">
                                </div>
                            </div>
                            <?php else : ?>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nis">Status</label>
                                    <input type="text" class="form-control" readonly value="<?= $pembayaran['status'] ?>">
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('siswa/bayar/'); ?><?= $pembayaran['id_spp']; ?>" class=" <?php ($pembayaran['nisn'] == $this->session->userdata('username')) ? print 'disabled' : print ' '; ?> btn btn-primary">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>