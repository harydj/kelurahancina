
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Kependudukan
        <small>index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
              <h3 class="box-title">Data Penduduk Kelurahan Cina</h3>
              <!-- <button type="button" class='pull-right btn btn-primary btn-sm' data-toggle="modal" data-target="#myModal" href='#'>Tambah Penduduk</button> -->
              <a type="button" class='pull-right btn btn-primary btn-sm' href="<?php echo base_url()."Infokependudukan/post"?>"><i class="fa fa-plus"></i> Tambah Penduduk</a>
        </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Nomor Telp</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data->result() as $row) {
                 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row->nama_lengkap; ?></td>
                  <td><?php echo $row->jenis_kelamin; ?></td>
                  <td><?php echo $row->no_telp; ?></td>
                  <td><center>
                                 <a class='btn btn-info btn-xs' title='Lihat Detail' href='<?php echo base_url()."Infokependudukan/detail"?>'><span class='glyphicon glyphicon-search'></span></a>
                                 <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."infokependudukan/delete_by_id/".$row->no_ktp;?>'><span class='glyphicon glyphicon-remove'></span></a>
                       </center>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
