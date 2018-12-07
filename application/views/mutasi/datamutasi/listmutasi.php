<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mutasi Penduduk
        <small>index/list.php</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Permohonan Mutasi Penduduk Kelurahan Cina</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Pemohon</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Jenis Mutasi</th>
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
                <td><?php echo $row->nik; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->no_telp; ?></td>
                <td><?php echo $row->jenis_mutasi; ?></td>
                <td>
                  <center>
                                 <a class='btn btn-info btn-xs' title='Detail Data' href='<?php echo base_url()."Listmutasi/edit/".$row->nik;?>'><span class='glyphicon glyphicon-eye-open'></span></a>
                                 <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."Listmutasi/delete_by_id/".$row->nik;?>'><span class='glyphicon glyphicon-remove'></span></a>
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
