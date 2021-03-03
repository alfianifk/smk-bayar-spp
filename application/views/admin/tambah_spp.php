<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <a href="<?= base_url('administrator/siswa'); ?>" class="mb-3 btn btn-sm btn-primary">Kembali</a>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Tambah Data SPP
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="from-group">
                                        <label for="bulan">Bulan</label>
                                        <select required name="bulan" class="form-control">
                                            <option value="Januari" >Januari</option>
                                            <option value="Februari" >Februari</option>
                                            <option value="Maret" >Maret</option>
                                            <option value="April" >April</option>
                                            <option value="Mei" >Mei</option>
                                            <option value="Juni" >Juni</option>
                                            <option value="Juli" >Juli</option>
                                            <option value="Agustus" >Agustus</option>
                                            <option value="September" >September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" name="tahun" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nominal">Nominal</label>
                                    <input type="text" name="nominal" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>