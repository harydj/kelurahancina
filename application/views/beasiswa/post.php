<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengajuan Surat Pernyataan Tidak Mampu (Beasiswa)
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
          <h3 class="box-title">Edit Surat</h3>
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
                <label for="nik" class="col-sm-2 control-label">NIK Org Tua/Wali :</label>
                <div class="col-sm-7">
                  <input id="nik" class="form-control" type="number" placeholder="Masukkan NIK Orang Tua/Wali" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                <label for="nik2" class="col-sm-2 control-label">NIK Anak :</label>
                <div class="col-sm-7">
                  <input id="nik2" class="form-control" type="number" placeholder="Masukkan NIK Anak" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                <label for="nis" class="col-sm-2 control-label">NIS/NIM Anak :</label>
                <div class="col-sm-7">
                  <input id="nis" class="form-control" type="number" placeholder="Masukkan NIS/NIM Anak" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="skl" class="col-sm-2 control-label">Nama Sekolah/Univ :</label>
                  <div class="col-sm-7">
                  <input id="skl" class="form-control" type="text" placeholder="Masukkan Nama Sekolah/Universitas Anak" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="alm" class="col-sm-2 control-label">Alamat Sekolah/Univ :</label>
                  <div class="col-sm-7">
                  <input id="alm" class="form-control" type="text" placeholder="Masukkan Alamat Sekolah/Universitas Anak" required>
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
