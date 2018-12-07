<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengajuan Surat Domisili
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
              <!-- .form -->
              
              <div class="form-group col-md-11">
                  <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                  <div class="col-sm-7" id="app">
                  <input id="nosrt" v-model="getMessage" class="form-control" type="number" placeholder="Masukkan No Surat" required>
                  <small>KCN/</small><small>{{getMessage}}</small><small>/2/2017</small>
                </div>
              </div>

              <style>
                .space{
                  margin-left: 20px;
                }
              </style>
              <div id="transition-components-demo">
              <div class="form-group col-md-11">
                <label for="nik" class="col-sm-2 control-label">Jenis Domisili :</label>
                <div class="col-sm-7">

                        <input v-model="view" type="radio" value="v-a" id="ar" name="view"><label for="ar">&nbsp;Pribadi</label>
                        <input v-model="view" type="radio" value="v-b" id="b" name="view" style="margin-left:10px;"><label for="b">&nbsp;Organisasi</label>
                        <input v-model="view" type="radio" value="v-c" id="c" name="view" style="margin-left:10px;"><label for="c">&nbsp;Usaha</label>
                </div>
              </div>
              <transition name="component-fade" mode="out-in">
                 <component v-bind:is="view"></component>
              </transition>
              <style>
              .component-fade-enter-active, .component-fade-leave-active {
                transition: opacity .3s ease;
              }
              .component-fade-enter, .component-fade-leave-to
              /* .component-fade-leave-active for <2.1.8 */ {
                opacity: 0;
              }

              </style>
              <script>
                      new Vue({
                      el: '#transition-components-demo',
                      data: {
                        view: 'v-a'
                      },
                      components: {
                        'v-a': {
                          template: '<div><div class="form-group col-md-11"><label class="col-sm-2 control-label">NIK :</label><div class="col-sm-7"><input placeholder="Masukkan NIK" type="number" min="0" class="form-control"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Tujuan :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan"></div></div></div>'
                        },
                        'v-b': {
                          template: '<div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Organisasi :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Nama Organisasi/Yayasan"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Pemilik :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Organisasi/Yayasan"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Alamat :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Alamat Organisasi/Yayasan"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Jenis :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Jenis Organisasi/Yayasan"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Tujuan :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan Surat"></div></div></div>'
                        },
                        'v-c': {
                          template: '<div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Usaha :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Nama Usaha"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Pemilik :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Usaha"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Alamat :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Alamat Usaha"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Jenis :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Jenis Usaha"></div></div><div class="form-group col-md-11"><label class="col-sm-2 control-label">Tujuan :</label><div class="col-sm-7"><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan Surat"></div></div></div>'
                        }
                      }
                    })
              </script>
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
