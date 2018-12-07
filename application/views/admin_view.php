<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
            <?php
            $penduduk = 0;
            $pelayanan = 0;
            $pegawai = 0;
            $pengadaan = 0;
            foreach ($data->result() as $row) {
              $penduduk++;
            }
            foreach ($data1->result() as $row) {
              $pelayanan++;
            }
            foreach ($data2->result() as $row) {
              $pegawai++;
            }
            foreach ($data3->result() as $row) {
              $pengadaan++;
            }
            ?>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Penduduk</span>
              <span class="info-box-number"><big><big><big><?php echo $penduduk ?></big></big></big></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pelayanan</span>
              <span class="info-box-number"><big><big><big><?php echo $pelayanan ?></big></big></big></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Staff</span>
              <span class="info-box-number"><big><big><big><?php echo $pegawai ?></big></big></big></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Infrastruktur</span>
              <span class="info-box-number"><big><big><big><?php echo $pengadaan ?></big></big></big></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
       <div class="row">
         <div class="col-md-5">
           <!-- PRODUCT LIST -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pengaduan Masyarakat</h3>
            </div>
            <?php
            foreach ($data4->result() as $row) {
           ?>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <span class="info-box-icon bg-red"><i class="fa fa-exclamation-circle"></i></span>
                <li class="item">
                  <div class="info-box-content">
                      <a href="javascript:void(0)" class="product-title"><?php echo $row->nama ?>
                        <span class="label label-warning pull-right">Pengaduan</span></a>
                          <span class="product-description">
                            <?php echo $row->isi ?>
                          </span>
                  </div>

                </li>
              </ul>
            </div>
            <!-- /.box-body -->  <?php } ?>
            <div class="box-footer text-center">
              <a href="<?php echo base_url()."Pengaduan"?>" class="uppercase">Lihat Data</a>
            </div>

          </div>
            <!-- /.box primary -->
        </div>
        <!-- /.col -->

        <div class="col-md-7">
          <!-- BAR CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Statistik Kel. Cina</h3>
            </div>
            <div class="box-body chart-responsive">
              <!-- <div class="chart" id="bar-chart" style="height: 300px;"></div> -->
              <div id="bar-stat" style="height: 325px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       </div>
       <!-- /.col -->

      </div>
      <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
