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

           .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
       </style>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <?php
          foreach ($data->result() as $row) {
         ?>
      <!-- Profile Image -->
      <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Profile/update/".$row->nip;?>">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h3 class="profile-username text-center"><?php echo $row->nama; ?></h3>
              <div>
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/img/<?=$row->foto;?>.jpg" alt="User profile picture">
              <center>
                <div class="fileUpload btn btn-danger btn-xs">
                  <span class="fa fa-camera"> Upload</span>
                <input class="upload" type="file" name="filefoto" accept="image/*"/>
                <!-- <button class='btn btn-info btn-xs' for="upload" onclick="chooseFile();"  title='Edit Data'><span class="fa fa-camera"></span></button> -->
              </div>
            </div>
            </center>
              <p class="text-muted text-center">Pegawai Administrasi</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <i class="fa fa-phone" title="website"></i><a class="pull-right"><?php echo $row->telp; ?></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-at" title="website"></i><a class="pull-right"><?php echo $row->email; ?></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
          <!-- Default box -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Data</h3>
                </div>
                <form id="form" class="form-horizontal ">
                <div class="box-body">
                  <div class="form-group col-md-12">
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row->nama; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="nip" class="col-sm-2 control-label">NIP :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row->nip; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="jk" class="col-sm-2 control-label">Jenis Kelamin :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jk" name="jk" value="<?php echo $row->jeniskelamin; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="usia" class="col-sm-2 control-label">Usia :</label>
                    <div class="col-sm-8">
                      <input type="number" min ="0" class="form-control" id="usia" name="usia" value="<?php echo $row->usia; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="usia" class="col-sm-2 control-label">Nomor Telepon :</label>
                    <div class="col-sm-8">
                      <input type="number" min ="0" class="form-control" id="no_telp" name="no_telp" value="<?php echo $row->telp; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="usia" class="col-sm-2 control-label">email :</label>
                    <div class="col-sm-8">
                      <input type="email" min ="0" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tmpt" class="col-sm-2 control-label">Tempat Lahir :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmpt" value="<?php echo $row->tempat_lahir; ?>" name="tmpt">
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datepicker" name="tgl_lahir" value="<?php echo $row->tgl_lahir; ?>" placeholder="Tanggal" required>
                    </div>
                    <!-- /.input group -->
                  </div>

                  <center>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="self.history.back()"><i class="fa fa-ban"></i> Cancel</button>
                  </center>
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
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
