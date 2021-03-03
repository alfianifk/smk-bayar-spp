<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
            <a href="<?= base_url('administrator/siswa'); ?>" class="mb-3 btn btn-sm btn-primary">Kembali</a>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Ubah Data SPP
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
                                            <option <?php ($spp['bulan'] == 'Januari') ? print 'selected' : print ' '; ?> value="Januari" >Januari</option>
                                            <option <?php ($spp['bulan'] == 'Februari') ? print 'selected' : print ' '; ?> value="Februari" >Februari</option>
                                            <option <?php ($spp['bulan'] == 'Maret') ? print 'selected' : print ' '; ?> value="Maret" >Maret</option>
                                            <option <?php ($spp['bulan'] == 'April') ? print 'selected' : print ' '; ?> value="April" >April</option>
                                            <option <?php ($spp['bulan'] == 'Mei') ? print 'selected' : print ' '; ?> value="Mei" >Mei</option>
                                            <option <?php ($spp['bulan'] == 'Juni') ? print 'selected' : print ' '; ?> value="Juni" >Juni</option>
                                            <option <?php ($spp['bulan'] == 'Juli') ? print 'selected' : print ' '; ?> value="Juli" >Juli</option>
                                            <option <?php ($spp['bulan'] == 'Agustus') ? print 'selected' : print ' '; ?> value="Agustus" >Agustus</option>
                                            <option <?php ($spp['bulan'] == 'September') ? print 'selected' : print ' '; ?> value="September" >September</option>
                                            <option <?php ($spp['bulan'] == 'Oktober') ? print 'selected' : print ' '; ?> value="Oktober">Oktober</option>
                                            <option <?php ($spp['bulan'] == 'November') ? print 'selected' : print ' '; ?> value="November">November</option>
                                            <option <?php ($spp['bulan'] == 'Desember') ? print 'selected' : print ' '; ?> value="Desember">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="tahun">Tahun</label>
                                    <input value="<?= $spp['tahun'] ?>" type="text" class="form-control" name="tahun" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nominal">Nominal</label>
                                    <input type="text" value="<?= $spp['nominal'] ?>" name="nominal" class="form-control">
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