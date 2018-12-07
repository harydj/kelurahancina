<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Profile Akun
        <small>index</small>
      </h1>
    </section>

    <style>
       .cst-textarea {
           height: 220px !important;
           resize: none;
           }
           input[type=number]::-webkit-inner-spin-button,
           input[type=number]::-webkit-outer-spin-button {
             -webkit-appearance: none;
             margin: 0;
           }
       </style>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
      <!-- Profile Image -->
          <?php
          foreach ($data->result() as $row) {
          ?>
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/img/<?=$row->foto;?>.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row->nama; ?></h3>

              <p class="text-muted text-center"><?php echo $row->status; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-phone" title="website"></i><a class="pull-right"><?php echo $row->telp  ; ?></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-at" title="website"></i><a class="pull-right"><?php echo $row->email; ?></a>
                </li>
              </ul>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
          <!-- Default box -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Diri</h3>
                </div>
                <form id="form" class="form-horizontal ">
                <div class="box-body">
                  <div class="form-group col-md-12">
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row->nama; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="nip" class="col-sm-2 control-label">NIP :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row->nip; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="jk" class="col-sm-2 control-label">Jenis Kelamin :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jk" name="jk" value="<?php echo $row->jeniskelamin; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="usia" class="col-sm-2 control-label">Usia :</label>
                    <div class="col-sm-8">
                      <input type="number" min ="0" class="form-control" id="usia" name="usia" value="<?php echo $row->usia; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tmpt" class="col-sm-2 control-label">Tempat Lahir :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmpt" value="<?php echo $row->tempat_lahir; ?>" name="tmpt" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datepicker" value="<?php echo $row->tgl_lahir; ?>" placeholder="Tanggal" disabled required>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <?php } ?>

                </div>
              </form>
                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer-->
              </div>
              <!-- /.box -->
        </div>

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
