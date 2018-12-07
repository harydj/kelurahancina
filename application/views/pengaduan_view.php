<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengaduan Masyarakat
        <small>index</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Pengaduan Masyarakat</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No KTP</th>
                  <th>Nama Pelapor</th>
                  <th>Isi Pengaduan</th>
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
                  <td><?php echo $row->no_ktp; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->isi; ?></td>
                  <td>
                    <center>
                                   <a class='btn btn-success btn-xs' title='Print' href='#'><span class='glyphicon glyphicon-print'></span></a>
                                   <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."Pengaduan/delete_by_id/".$row->no_ktp;?>'><span class='glyphicon glyphicon-remove'></span></a>
                      </center>
                  </td>
                </tr>
                  <?php } ?>
                </tbody>
              </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
