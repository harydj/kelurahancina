<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengajuan Surat Keterangan Kematian
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
                  <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                  <div class="col-sm-7" id="app">
                  <input id="nosrt" v-model="getMessage" class="form-control" type="number" placeholder="Masukkan No Surat" required><small>KCN/</small><small>{{getMessage}}</small><small>/2/2017</small>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nik1" class="col-sm-2 control-label">NIK :</label>
                  <div class="col-sm-7">
                  <input id="nik1" class="form-control" type="number" placeholder="Masukkan NIK yang Meninggal" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nama1" class="col-sm-2 control-label">Nama Lengkap :</label>
                  <div class="col-sm-7">
                  <input id="nama1" class="form-control" type="text" placeholder="Masukkan Nama yang Meninggal" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                <label for="datepicker" class="col-sm-2 control-label">Tanggal Kematian :</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <input type="text" class="form-control" id="datepicker" placeholder="Tanggal" required>
                  </div>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group col-md-11">
                  <label for="tmpt" class="col-sm-2 control-label">Tempat Kematian :</label>
                  <div class="col-sm-7">
                  <input id="tmpt" class="form-control" type="text" placeholder="Masukkan Tempat Meninggal" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="peny" class="col-sm-2 control-label">Penyebab Kematian :</label>
                  <div class="col-sm-7">
                  <input id="peny" class="form-control" type="text" placeholder="Masukkan Penyebab Meninggal" required>
                </div>
              </div>

              <!-- .form -->
              <div class="form-group col-md-11">
                  <label for="nik2" class="col-sm-2 control-label">NIK Pelapor :</label>
                  <div class="col-sm-7">
                  <input id="nik2" class="form-control" type="number" placeholder="Masukkan NIK Pelapor" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nama1" class="col-sm-2 control-label">Nama Pelapor :</label>
                  <div class="col-sm-7">
                  <input id="nama1" class="form-control" type="text" placeholder="Masukkan Nama Pelapor" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="hub" class="col-sm-2 control-label">Hub. yg Meninggal :</label>
                  <div class="col-sm-7">
                  <input id="hub" class="form-control" type="text" placeholder="Masukkan Hubungan dengan yang Meninggal, e.g. Kepala Keluarga.." required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="ttd" class="col-sm-2 control-label">Penanda Tangan :</label>
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
