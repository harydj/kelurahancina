<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Permohonan Mutasi Penduduk (Keluar)
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
          <h3 class="box-title">Input Form</h3>
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
              <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Mutasipndh"?>/simpan">
              <!-- Data diri -->
              <div class="form-group col-md-11">
                <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                <div class="col-sm-7" id="app">
                  <input id="nosrt" name="nosrt" v-model="getMessage" class="form-control" type="number" placeholder="Masukkan No Surat" required>
                  <small>KCN/</small><small>{{getMessage}}</small><small>/2/2017</small>
                </div>
              </div>
              <div class="form-group col-md-11">
                  <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                  <div class="col-sm-7">
                  <input id="nama" class="form-control" type="text" name="nama" placeholder="Masukkan Nama Pemohon" required>
                </div>
              </div>
              <!-- .form -->
              <div class="form-group col-md-11">
                  <label for="nik" class="col-sm-2 control-label">NIK :</label>
                  <div class="col-sm-7">
                  <input id="nik" class="form-control" type="number" name="nik" placeholder="Masukkan NIK Pemohon" required>
                </div>
              </div>
              <div class="form-group col-md-11">
                  <label for="alamat" class="col-sm-2 control-label">Alamat :</label>
                  <div class="col-sm-7">
                  <input id="alamat" name="alamat" class="form-control" type="text" placeholder="Masukkan Alamat Pemohon" required>
                </div>
              </div>
              <div class="form-group col-md-11">
                  <label for="no_telp" class="col-sm-2 control-label">No Telp :</label>
                  <div class="col-sm-7">
                  <input id="no_telp" name="no_telp" class="form-control" type="number" placeholder="Masukkan No Telp Pemohon" required>
                </div>
              </div>
              <div id="transition-components-demo">
                 <div class="form-group col-md-11">
                       <label for="alasan" class="col-sm-2 control-label">Alasan :</label>
                       <div class="col-sm-7">
                         <select v-model="selected" class="form-control" id="alasan" name="alasan">
                           <option value="n/a" selected disabled>-Alasan Pindah Pemohon-</option>
                           <option value="Pekerjaan">Pekerjaan</option>
                           <option value="Pendidikan">Pendidikan</option>
                           <option value="Keamanan">Keamanan</option>
                           <option value="Kesehatan">Kesehatan</option>
                           <option value="Keluarga">Keluarga</option>
                           <option value="Perumahan">Perumahan</option>
                           <option value="else" name="view"><b>Lainnya...</b></option>
                         </select>
                     </div>
                   </div>
                   <transition name="component-fade" mode="out-in">
                      <component v-bind:is="selected"></component>
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
                             selected: 'v-a'
                           },
                           components: {
                             'v-a': {
                               template: '<div></div>'
                             },
                             'else': {
                               template: '<div><div class="form-group col-md-11"><label class="col-sm-2 control-label"></label><div class="col-sm-7"><input placeholder="Masukkan Alasan Lainnya" type="text" name="alasan2" class="form-control"></div></div></div>'
                             }

                           }
                         })
                   </script>
                 </div>

                 <div class="form-group col-md-11">
                     <label for="alamat" class="col-sm-2 control-label">Alamat Tujuan :</label>
                     <div class="col-sm-7">
                     <input id="alamat" class="form-control" type="text" name="alamat_tujuan" placeholder="Masukkan Alamat Tujuan Pemohon" required>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="dusun" class="col-sm-2 control-label">Dusun Tujuan :</label>
                     <div class="col-sm-7">
                     <input id="dusun" class="form-control" type="text" name="dusun" placeholder="Masukkan Alamat Tujuan Pemohon" required>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="alamat" class="col-sm-2 control-label">Provinsi :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="instansi" name="provinsi">
                       <option value="n/a" selected disabled>-Provinsi Tujuan-</option>
                       <option value="DKI JAKARTA">DKI JAKARTA</option>
                       <option value="BANTEN">BANTEN</option>
                       <option value="JAWA BARAT">JAWA BARAT</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="alamat" class="col-sm-2 control-label">Kabupaten :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="instansi" name="kabupaten">
                       <option value="n/a" selected disabled>-Kab/Kota Tujuan-</option>
                       <option value="BANDUNG KOTA">BANDUNG KOTA</option>
                       <option value="KAB. BANDUNG">KAB. BANDUNG</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="alamat" class="col-sm-2 control-label">Kecamatan :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="instansi" name="kecamatan">
                       <option value="n/a" selected disabled>-Kecamatan Tujuan-</option>
                       <option value="Dayeuhkolot">Dayeuhkolot</option>
                       <option value="Banjaran">Banjaran</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="alamat" class="col-sm-2 control-label">Desa/Kelurahan :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="instansi" name="kel_desa">
                       <option value="n/a" selected disabled>-Desa/Kelurahan Tujuan-</option>
                       <option value="Dayeuhkolot">Dayeuhkolot</option>
                       <option value="Banjaran">Banjaran</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="pos" class="col-sm-2 control-label">Kode POS :</label>
                     <div class="col-sm-7">
                     <input id="pos" class="form-control" type="number" name="kdpos" placeholder="Masukkan Kode POS Tujuan" required>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                   <label for="datepicker" class="col-sm-2 control-label">Tanggal Kepindahan :</label>
                   <div class="col-sm-7">
                       <input type="text" class="form-control" id="datepicker" name="tgl" placeholder="Tanggal" required>
                   </div>
                   <!-- /.input group -->
                 </div>
                 <div class="form-group col-md-11">
                     <label for="klr" class="col-sm-2 control-label">Klrasifikasi Pindah :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="klr" name="klr">
                       <option value="n/a" selected disabled>-Pilih Klarifikasi Kepindahan-</option>
                       <option value="Antar Satu Kelurahan">Antar Satu Kelurahan</option>
                       <option value="Antar Kecamatan">Antar Kecamatan</option>
                       <option value="Antar Kab/Kota">Antar Kab/Kota</option>
                       <option value="Antar Kelurahan">Antar Kelurahan</option>
                     </select>
                   </div>
                 </div>
                 <div class="form-group col-md-11">
                     <label for="jenis" class="col-sm-2 control-label">Jenis Pindah :</label>
                     <div class="col-sm-7">
                     <select class="form-control" id="jenis" name="jenis">
                       <option value="n/a" selected disabled>-Pilih Jenis Kepindahan-</option>
                       <option value="Kepala Keluarga">Kepala Keluarga</option>
                       <option value="Kep. Keluarga & Seluruh Anggota Keluarga">Kep. Keluarga & Seluruh Anggota Keluarga</option>
                       <option value="Kep. Keluarga & Sebagian Anggota Keluarga">Kep. Keluarga & Sebagian Anggota Keluarga</option>
                       <option value="Anggota Keluarga">Anggota Keluarga</option>
                     </select>
                   </div>
                 </div>
              <div class="form-group col-md-11">
                  <label for="ttd" class="col-sm-2 control-label">Penanda Tangan :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="ttd" name="ttd" placeholder="Pilih TTD">
                      <option value="Sarifuddin">Sarifudin</option>
                      <option value="Ahmmanto">Ahmanto</option>
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

    <center>
        <div>
              <div class="margin">
                  <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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
