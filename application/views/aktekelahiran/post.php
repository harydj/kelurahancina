<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengajuan Surat Akte Kelahiran
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Form</h3>
        </div>
    <!-- /.box-header -->
    <style>
      .inline-form{
        display: inline-block !important;
      }
    </style>
      <div class="form-horizontal">
        <div class="box-body">
          <div class="row">
            <br>
            <div class="col-md-14">
              <!-- Data diri -->
              <div class="form-group col-md-11">
                  <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                  <div class="col-sm-7">
                  <input id="nama" class="form-control" type="text" placeholder="Masukkan Nama Pemohon" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                  <div class="col-sm-7">
                    <div id="app">
                  <input id="nosrt" v-model="getMessage" class="form-control" type="number" placeholder="Masukkan No Surat (4 Digit)" required>
                  <small>SKCN/</small><small>{{getMessage}}</small><small>/2/2017</small>
                  </div>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="namaa" class="col-sm-2 control-label">Nama Lengkap Anak :</label>
                  <div class="col-sm-7">
                  <input id="namaa" class="form-control" type="text" placeholder="Masukkan Nama Anak" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="kwn" class="col-sm-2 control-label">Jenis Kelamin Anak :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="kwn" name="kwn" placeholder="Pilih Jenis Kelamin Anak">
                      <option value="wni">Laki-Laki</option>
                      <option value="wna">Perempuan</option>
                    </select>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="tplhr" class="col-sm-2 control-label">Tempat Lahir :</label>
                  <div class="col-sm-7">
                  <input id="tplhr" class="form-control" type="text" placeholder="Masukkan Tempat Lahir" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir Anak :</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" required>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group col-md-11">
                  <label for="agm" class="col-sm-2 control-label">Agama :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="agm" name="skk" placeholder="Pilih Status">
                      <option value="isl">Islam</option>
                      <option value="kpr">Kristen Protestan</option>
                      <option value="ktl">Katolik</option>
                      <option value="hnd">Hindu</option>
                      <option value="bdh">Budha</option>
                      <option value="khc">Kong Hu Cu</option>
                      <option value="lnn">Lainnya</option>
                    </select>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="anakke" class="col-sm-2 control-label">Anak Ke- :</label>
                  <div class="col-sm-7">
                  <input id="anakke" class="form-control" type="text" placeholder="Anak Ke-" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nobdn" class="col-sm-2 control-label">No Surat RS/Bidan :</label>
                  <div class="col-sm-7">
                  <input id="nobdn" class="form-control" type="number" placeholder="Masukkan No Surat RS/Bidan" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="almt" class="col-sm-2 control-label">Alamat :</label>
                  <div class="col-sm-7">
                  <input id="almt" class="form-control" type="text" placeholder="Masukkan Alamat" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nikibu" class="col-sm-2 control-label">NIK Ibu :</label>
                  <div class="col-sm-7">
                  <input id="nikibu" class="form-control" type="number" placeholder="Masukkan NIK Ibu" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nikayah" class="col-sm-2 control-label">NIK Ayah :</label>
                  <div class="col-sm-7">
                  <input id="nikayah" class="form-control" type="number" placeholder="Masukkan NIK Ayah" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="ttd" class="col-sm-2 control-label">Tanda Tangan Oleh :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="ttd" name="ttd" placeholder="Pilih TTD">
                      <option value="a">Sarifudin</option>
                      <option value="b">Ahmanto</option>
                    </select>
                </div>
              </div>

            <!-- End data diri -->
            <br>
          </div>
            <!-- .col -->
      </div>
    <!-- row -->
            <style>
                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                  /* display: none; <- Crashes Chrome on hover */
                  -webkit-appearance: none;
                  margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
                  }
            </style>

        <div>
          <center>
              <div class="margin">
                  <button  type="button" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  <button  type="button" name="cetak" id="btncetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
                  <button  type="button" name="batal" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-ban"></i> Batal</button>
                </div>
          </center>
        </div>
      </div>
  <!-- .box-body -->
    </div>
<!-- .form -->
  </div>
  </section>
</div>

<script>
  var app = new Vue({
  el: '#app',
  data: {
    getMessage: '(Nomor Surat)'
  }
  })
</script>
