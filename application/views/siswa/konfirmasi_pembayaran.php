<section class="content">
    <div class="container-fluid">
    <a href="<?= base_url('siswa/rincian/'); ?><?= $bayar_spp['id_spp']; ?>" class="mb-3 btn btn-sm btn-primary">Kembali</a>
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-md-10">
                <div class="mt-3 card">
                    <div class="card-header">
                        <div class="card-title">Konfirmasi Pembayaran SPP bulan <b><?= $bayar_spp['bulan']; ?></b></div>
                    </div>
                    <?php echo form_open_multipart();?>
                    <input type="hidden" name="id_spp" value="<?= $bayar_spp['id_spp']; ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" readonly value="<?= $this->session->userdata('nama'); ?>" name="nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="number" readonly value="<?= $this->session->userdata('username'); ?>" class="form-control" name="nis">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_bayar">Tanggal Bayar</label>
                                    <input type="text" value="<?= date("d M Y") ?>" readonly class="form-control" name="tgl_bayar">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bulan_dibayar">Bulan yang di bayar</label>
                                    <input type="text" name="bulan_dibayar" value="<?= $bayar_spp['bulan'] ?>" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tahun_dibayar">Tahun yang di bayar</label>
                                    <input type="text" name="tahun_dibayar" value="<?= $bayar_spp['tahun'] ?>" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Bayar</label>
                                    <input type="text" class="form-control" name="nominal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Gambar Bukti Pembayaran</label>
                                    <input type="file" name="gambar" class="form-control-file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Kirim Bukti Pembayaran</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>