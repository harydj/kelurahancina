<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Lengkap Penduduk
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

           .photo{
             height: 200px;
             width: 172px;
           }
       </style>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
      <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-square photo" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
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
                  <div class="form-group col-md-13">
                    <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama" name="nama" value="Peter Jhonson">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="nip" class="col-sm-2 control-label">NIK :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" name="nik" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="nip" class="col-sm-2 control-label">Nomor KK :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nokk" name="nokk" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="nip" class="col-sm-2 control-label">Nomor KTP :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="noktp" name="noktp" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="jk" class="col-sm-2 control-label">Jenis Kelamin :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jk" name="jk" value="Laki-Laki">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="usia" class="col-sm-2 control-label">Usia :</label>
                    <div class="col-sm-8">
                      <input type="number" min ="0" class="form-control" id="usia" name="usia" value="25">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="jk" class="col-sm-2 control-label">Status KK :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="statuskk" name="statuskk" value="Kepala Keluarga">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="jk" class="col-sm-2 control-label">Status Pernikahan :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="statusnikah" name="statusnikah" value="Menikah">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="nktp" class="col-sm-2 control-label">KTP Pasangan :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="noktpp" name="noktpp" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="tmpt" class="col-sm-2 control-label">Tempat Lahir :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmpt" name="tmpt">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" required>
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamat" name="alamat" value="Jl Example">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="agama" class="col-sm-2 control-label">Agama :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama" name="agama" value="Islam">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="pendidikan" class="col-sm-2 control-label">Pendidikan :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="S2">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="PNS">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="penghasilan" class="col-sm-2 control-label">Penghasilan :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="penghasilan" name="penghasilan" value="Rp 1000.0000">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="kewarganegaraan" class="col-sm-2 control-label">Warga Negara :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="WNI">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="disabilitas" class="col-sm-2 control-label">Disabilitas :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="disabilitas" name="disabilitas" value="Tidak Cacat">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="goldarah" class="col-sm-2 control-label">Gol Darah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="goldarah" name="goldarah" value="AB">
                    </div>
                  </div>
                  <hr />
                  <h4>Data Ayah Dari [Nama Penduduk]</h4>
                  <div class="form-group col-md-13">
                    <label for="nikayah" class="col-sm-2 control-label">NIK Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nikayah" name="nikayah" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="namaayah" class="col-sm-2 control-label">Nama Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namaayah" name="namaayah" value="Peter Peter">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="tmptayah" class="col-sm-2 control-label">Tempat Lahir Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmptayah" name="tmptayah">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="datepicker2" class="col-sm-2 control-label">Tgl Lahir Ayah :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datepicker2" placeholder="Tanggal" required>
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="agamaayah" class="col-sm-2 control-label">Agama Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agamaayah" name="agamaayah" value="Islam">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="pekerjaanayah" class="col-sm-2 control-label">Pekerjaan Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah" value="PNS">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="alamatayah" class="col-sm-2 control-label">Alamat Ayah :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamatayah" name="alamatayah" value="Jl Example">
                    </div>
                  </div>
                  <hr />
                  <h4>Data Ibu Dari [Nama Penduduk]</h4>
                  <div class="form-group col-md-13">
                    <label for="nikibu" class="col-sm-2 control-label">NIK Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nikibu" name="nikibu" value="XXXXXXXX">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="namaibu" class="col-sm-2 control-label">Nama Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namaibu" name="namaibu" value="Peter Peter">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="tmptibu" class="col-sm-2 control-label">Tempat Lahir Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmptibu" name="tmptibu">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="datepicker2" class="col-sm-2 control-label">Tgl Lahir Ibu :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datepicker2" placeholder="Tanggal" required>
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="agamaibu" class="col-sm-2 control-label">Agama Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agamaibu" name="agamaibu" value="Islam">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="pekerjaanibu" class="col-sm-2 control-label">Pekerjaan Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu" value="PNS">
                    </div>
                  </div>
                  <div class="form-group col-md-13">
                    <label for="alamatibu" class="col-sm-2 control-label">Alamat Ibu :</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamatibu" name="alamatibu" value="Jl Example">
                    </div>
                  </div>
                </div>
                <div>
                <center>
                    <div class="margin">
                        <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                      <button  type="button" name="batal" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-ban"></i> Batal</button>
                      </div>
                </center>
              </div>
                <!-- /.box-body -->
              </form>
                <div class="box-footer">
                  Last edit:
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
