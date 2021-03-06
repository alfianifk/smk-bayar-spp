    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= count($pembayaran) ?></h3>

                <p>History Pembayaran</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-money"></i>
              </div> -->
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= count($spp); ?></h3>

                <p>Tagihan</p>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div> -->
              <a href="<?= base_url('siswa/tagihan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      <!-- <div class="container-fluid">
        <div class="row">
            <section class="col-lg-7 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        tes
                    </div>
                </div>
            </section>
        </div>
      </div> -->
    </section>
    <!-- /.content -->
  </div>