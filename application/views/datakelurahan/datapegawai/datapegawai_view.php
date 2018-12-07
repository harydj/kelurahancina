
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelurahan
        <small>Data Pegawai</small>
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
              <h3 class="box-title">Data Pegawai/Staff Kelurahan Cina</h3>
              <button type="button" class='pull-right btn btn-primary btn-sm' data-toggle="modal" data-target="#myModal" href='#'>Tambah Pegawai</button>
        </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Nomor HP</th>
                  <th>E-mail</th>
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
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->jeniskelamin; ?></td>
                  <td><?php echo $row->telp; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><center>
                                 <a class='btn btn-info btn-xs' title='Lihat Detail' href='<?php echo base_url()."Datapegawai/detail/".$row->nip;?>'><span class='glyphicon glyphicon-search'></span></a>
                                 <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."Datapegawai/delete_by_id/".$row->nip;?>'><span class='glyphicon glyphicon-remove'></span></a>
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

        <h4 class="modal-title">Tambah Data Pegawai Baru</h4>
        </div>
              <div class="modal-body">
                <!--form start-->
                <div id="alert" class="alert hidden" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span id="alertTitle" class="sr-only">Error:</span>
                  <span id="alertBody">Enter a valid email address</span>
                </div>
                <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Datapegawai"?>/simpan">
                <div class="form-group">
                  <label for="exampleInputName">Nama Lengkap <font color="red">*</font></label>
                  <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputNIP">NIP <font color="red">*</font></label>
                  <input type="number" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin <font color="red">*</font></label>
                    <select class="form-control" id="jk" name="jk" placeholder="Pilih Jenis Kelamin">
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">Usia <font color="red">*</font></label>
                    <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia Anda"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">No. Telp/ Handphone <font color="red">*</font></label>
                    <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Masukkan No. Telp/Handphone"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">Tempat Lahir <font color="red">*</font></label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNumber">Tanggal Lahir <font color="red">*</font></label>
                    <input type="text" class="form-control" id="datepicker" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email <font color="red">*</font></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto <font color="red">*</font></label>
                    <input type="file" class="form-control" id="filefoto" name="filefoto" placeholder="Masukkan Foto" required>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">Username<font color="red"> * </font><span class="small"><font color="#808080">Minimal 6 karakter</font></span></label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password <font color="red"> * </font><span class="small"><font color="#808080">Minimal 6 karakter</font></span></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password <font color="red">*</font></label>
                      <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="Confirm Password" required>
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
        <script>
        var password = document.getElementById("password"),
        confirm_password = document.getElementById("passwordconfirm");

        function validatePassword() {
          if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity("");
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        </script>
        <!-- end modal -->
