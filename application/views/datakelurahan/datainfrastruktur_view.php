
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelurahan
        <small>Data Infrastruktur</small>
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
              <h3 class="box-title">Data Infrastuktur Kelurahan Cina</h3>
              <button type="button" class='pull-right btn btn-primary btn-sm' data-toggle="modal" data-target="#myModal" href='#'>Tambah Aset</button>
        </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Jenis Aset</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Tanggal Pembelian</th>
                  <th>Kondisi</th>
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
                  <td><?php echo $row->kode_aset; ?></td>
                  <td><?php echo $row->nama_aset; ?></td>
                  <td><?php echo $row->jumlah; ?></td>
                  <td><?php echo $row->harga; ?></td>
                  <td><?php echo $row->tgl_pembelian; ?></td>
                  <td><?php echo $row->kondisi; ?></td>
                  <td><center>
                                 <a class='btn btn-success btn-xs' title='Edit Data' href='#'><span class='glyphicon glyphicon-edit' data-toggle="modal" data-target="#editModal"></span></a>
                                 <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."Datainfrastruktur/delete_by_id/".$row->kode_aset;?>'><span class='glyphicon glyphicon-remove'></span></a>
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

  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>

    <h4 class="modal-title">Tambah Aset Baru</h4>
    </div>
          <div class="modal-body">
            <!--form start-->
            <div id="alert" class="alert hidden" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span id="alertTitle" class="sr-only">Error:</span>
              <span id="alertBody">Enter a valid email address</span>
            </div>
              <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Datainfrastruktur"?>/simpan">
            <div class="form-group">
              <label for="kodeaset">Kode Aset<font color="red">*</font></label>
              <input type="text" class="form-control" id="kodeaset" name="kodeaset" placeholder="Masukkan Kode Aset" required>
            </div>
            <div class="form-group">
              <label for="exampleInputName">Nama Aset<font color="red">*</font></label>
              <input type="text" class="form-control" id="namaaset" name="namaaset" placeholder="Masukkan Nama Aset" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNIP">Jumlah<font color="red">*</font></label>
              <input type="number" class="form-control" id="jum" name="jum" placeholder="Masukkan Jumlah" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNIP">Harga<font color="red">*</font></label>
              <input type="number" class="form-control" id="harga" name="harga" placeholder="Rp " required>
            </div>
            <!-- Date -->
              <div class="form-group">
                <label>Tanggal Pembelian</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tgl">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            <div class="form-group">
                <label>Kondisi<font color="red">*</font></label>
                <select class="form-control" id="jk" name="kondisi" placeholder="Pilih Kondisi">
                  <option value="Baik">Baik</option>
                  <option value="Rusak">Rusak</option>
                </select>
              </div>
            <!--end form-->
            <button type="submit" class="btn btn-primary" id="submit" style="float:right">Submit</button>
          </form>
            <!--end form-->
          </div>
          <div class="modal-footer">
            <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
          </div>

        </div>

      </div>

    </div>
    <!-- end modal -->

    <!-- Edit Modal -->
  <div class="modal fade" id="editModal" role="dialog">

      <div class="modal-dialog" role="document">

      <div class="modal-content">

      <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>

      <h4 class="modal-title">Edit Data</h4>
      </div>
            <div class="modal-body">
              <!--form start-->
              <div id="alert" class="alert hidden" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span id="alertTitle" class="sr-only">Error:</span>
                <span id="alertBody">Enter a valid email address</span>
              </div>
                <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Datainfrastruktur"?>/simpan">
              <div class="form-group">
                <label for="kodeaset">Kode Aset<font color="red">*</font></label>
                <input type="text" class="form-control" id="kodeaset" name="kodeaset" value="BRG=002" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Nama Aset<font color="red">*</font></label>
                <input type="text" class="form-control" id="namaaset" name="namaaset" value="Piano" required>
              </div>
              <div class="form-group">
                <label for="exampleInputNIP">Jumlah<font color="red">*</font></label>
                <input type="number" class="form-control" id="jum" name="jum" value="2" required>
              </div>
              <div class="form-group">
                <label for="exampleInputNIP">Harga<font color="red">*</font></label>
                <input type="number" class="form-control" id="harga" name="harga" value="15000000 " required>
              </div>
              <!-- Date -->
                <div class="form-group">
                  <label>Tanggal Pembelian</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tgl">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              <div class="form-group">
                  <label>Kondisi<font color="red">*</font></label>
                  <select class="form-control" id="jk" name="kondisi" placeholder="Pilih Kondisi">
                    <option value="Baik" selected>Baik</option>
                    <option value="Rusak">Rusak</option>
                  </select>
                </div>
              <!--end form-->
              <button type="submit" class="btn btn-primary" id="submit" style="float:right">Submit</button>
            </form>
              <!--end form-->
            </div>
            <div class="modal-footer">
              <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
            </div>

          </div>

        </div>

      </div>
      <!-- end modal -->
