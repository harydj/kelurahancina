pooi98uytrttrer4<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Penduduk
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
          <h3 class="box-title">Formulir Penduduk Baru</h3>
        </div>

    <!-- /.box-header -->
    <style>
      .inline-form{
        display: inline-block !important;
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        /* display: none; <- Crashes Chrome on hover */
        -webkit-appearance: none;
        margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }

    </style>
      <div class="form-horizontal">
        <div class="box-body">
          <div class="row">
            <br>
            <div class="col-md-14">
              <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Infokependudukan"?>/simpan">
              <!-- Data diri -->

            <div class="form-group col-md-11">
                <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                <div class="col-sm-7">
                <input id="nama" name="nama_lengkap" class="form-control" type="text" placeholder="Masukkan Nama Lengkap Penduduk" required>
              </div>
              <!-- <label for="nama" class="col-sm-2 control-label">Nama Lengkap:</label>
              <div class="col-sm-3">
              <input id="nama" class="form-control" type="text" placeholder="Masukkan Nama Lengkap Penduduk">
            </div> -->

            <!--Contoh inline-->
            </div>
            <div class="form-group col-md-11">
              <label for="nik" class="col-sm-2 control-label">NIK :</label>
              <div class="col-sm-7">
                <input id="nik" name="nik" class="form-control" type="number" placeholder="16 Digit" required>
              </div>
            </div>
            <div class="form-group col-md-11">
              <label for="nkk" class="col-sm-2 control-label">Nomor KK :</label>
              <div class="col-sm-7">
                <input id="nkk" name="no_kk" class="form-control" type="number" placeholder="16 Digit" required>
              </div>
            </div>
            <div class="form-group col-md-11">
                <label for="nktp" class="col-sm-2 control-label">Nomor KTP :</label>
                <div class="col-sm-7">
                <input id="nktp" name="no_ktp" class="form-control" type="number" placeholder="16 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="jk" class="col-sm-2 control-label">Jenis Kelamin :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="jk" name="jenis_kelamin" placeholder="Pilih Status">
                    <option value="n/a">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="usia" class="col-sm-2 control-label">Usia :</label>
                <div class="col-sm-7">
                <input id="usia" name="usia" class="form-control" type="number" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="skk" class="col-sm-2 control-label">Status KK :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="skk" name="st_kk" placeholder="Pilih Status">
                    <option value="Anak">Anak</option>
                    <option value="Kepala Keluaga">Kepala Keluarga</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Mertua">Mertua</option>
                    <option value="Menantu">Menantu</option>
                    <option value="Cucu">Cucu</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="spn" class="col-sm-2 control-label">Status Pernikahan :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="stp" name="st_pernikahan" placeholder="Pilih Status">
                    <option value="Belum Kawin(Perawan)">Belum Kawin(Perawan)</option>
                    <option value="Belum Kawin(Perjaka)">Belum Kawin(Perjaka)</option>
                    <option value="Kawin(Beristri)">Kawin(Beristri)</option>
                    <option value="Kawin(Besuami)">Kawin(Besuami)</option>
                    <option value="Cerai Hidup(Duda)">Cerai Hidup(Duda)</option>
                    <option value="Cerai Mati(Duda)">Cerai Mati(Duda)</option>
                    <option value="Cerai Hidup(Janda)">Cerai Hidup(Janda)</option>
                    <option value="Cerai Mati(Janda)">Cerai Mati(Janda)</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nktp" class="col-sm-2 control-label">No KTP Pasangan :</label>
                <div class="col-sm-7">
                <input id="nktp" class="form-control" type="number" name="no_ktp_pasangan" placeholder="16 Digit">
              </div>
            </div>

            <br>

            <div class="form-group col-md-11">
                <label for="tpl" class="col-sm-2 control-label">Tempat Lahir :</label>
                <div class="col-sm-7">
                <input id="tpl" class="form-control" type="text" name="tempat_lahir" placeholder="Kota/Desa" required>
              </div>
            </div>

            <div class="form-group col-md-11">
              <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir :</label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="datepicker" name="tgl_lahir" placeholder="Tanggal" required>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-md-11">
                <label for="almt" class="col-sm-2 control-label">Alamat :</label>
                <div class="col-sm-7">
                <input id="almt" class="form-control" type="text" name="alamat" placeholder="Jl." required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pos" class="col-sm-2 control-label">Kode POS :</label>
                <div class="col-sm-7">
                <input id="pos" class="form-control" type="number" name="kd_pos" placeholder="5 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="telp" class="col-sm-2 control-label">No Telp :</label>
                <div class="col-sm-7">
                <input id="telp" class="form-control" type="number" name="no_telp" placeholder="000">
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="agm" class="col-sm-2 control-label">Agama :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="agm" name="agama" placeholder="Pilih Status">
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pndk" class="col-sm-2 control-label">Pendidikan :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="pndk" name="pendidikan" placeholder="Pilih Status">
                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                    <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                    <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                    <option value="Diploma I/II">Diploma I/II</option>
                    <option value="Akademi/Sarjana Muda/Diploma III">Akademi/Sarjana Muda/Diploma III</option>
                    <option value="Strata I/Diploma IV">Strata I/Diploma IV</option>
                    <option value="Strata II">Strata II</option>
                    <option value="Strata III">Strata III</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pkrj" class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-7">
                <input id="pkrj" class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan Saat Ini" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pghs" class="col-sm-2 control-label">Penghasilan (Rp) :</label>
                <div class="col-sm-7">
                <input id="pghs" class="form-control" type="number" name="penghasilan" placeholder="e.g : 1000000" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="kwn" class="col-sm-2 control-label">Kewarganegaraan :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="kwn" name="kewarganegaraan" placeholder="Pilih Status">
                    <option value="wni">WNI</option>
                    <option value="wna">WNA</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="dsbl" class="col-sm-2 control-label">Disabilitas :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="dsbl" name="disabilitas" placeholder="Pilih Status">
                    <option value="Tidak Cacat">Tidak Cacat</option>
                    <option value="Cacat Fisik">Cacat Fisik</option>
                    <option value="Cacat Rungu/Wicara">Cacat Rungu/Wicara</option>
                    <option value="Cacat Netra/Buta">Cacat Netra/Buta</option>
                    <option value="Cacat Mental/Jiwa">Cacat Mental/Jiwa</option>
                    <option value="Cacat Fisik dan Mental">Cacat Fisik dan Mental</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="gdr" class="col-sm-2 control-label">Gol. Darah :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="gdr" name="gol_darah" placeholder="Pilih Status">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                  </select>
              </div>
            </div>
            <!-- End data diri -->
            <br>
            <!-- Data Ayah -->
            <div class="form-group col-md-11">

                <div class="col-sm-12">
                  <center><h2 class="page-header"></h2></center>
                </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nikayah" class="col-sm-2 control-label">NIK Ayah :</label>
                <div class="col-sm-7">
                <input id="nikayah" class="form-control" type="number" name="nik_ayah" placeholder="16 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nmayah" class="col-sm-2 control-label">Nama Ayah :</label>
                <div class="col-sm-7">
                <input id="nmayah" class="form-control" type="text" name="nama_ayah" placeholder="Nama Lengkap Ayah" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="tmptlhrayah" class="col-sm-2 control-label">Tempat Lahir Ayah :</label>
                <div class="col-sm-7">
                <input id="tmptlhrayah" class="form-control" type="text" name="tp_lahir_ayah" placeholder="Tempat Lahir Ayah" required>
              </div>
            </div>

            <div class="form-group col-md-11">
              <label for="datepicker1" class="col-sm-2 control-label">Tanggal Lahir Ayah :</label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="datepicker1" name="tgl_lahir_ayah" placeholder="Tanggal" required>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-md-11">
                <label for="kwnayah" class="col-sm-2 control-label">Negara Ayah :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="kwnayah" name="negara_ayah" placeholder="Pilih Status">
                    <option value="wni">WNI</option>
                    <option value="wna">WNA</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="agmayah" class="col-sm-2 control-label">Agama Ayah :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="agmayah" name="agama_ayah" placeholder="Pilih Status">
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pkjayah" class="col-sm-2 control-label">Pekerjaan Ayah :</label>
                <div class="col-sm-7">
                <input id="okjayah" class="form-control" type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="almtayah" class="col-sm-2 control-label">Alamat Ayah :</label>
                <div class="col-sm-7">
                <input id="almtayah" class="form-control" type="text" name="alamat_ayah" placeholder="Alamat Ayah" required>
              </div>
            </div>
            <!-- End data ayah -->

            <br>
            <!-- Data Ibu -->
            <div class="form-group col-md-11">

                <div class="col-sm-12">
                  <center><h2 class="page-header"></h2></center>
                </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nikibu" class="col-sm-2 control-label">NIK Ibu :</label>
                <div class="col-sm-7">
                <input id="nikibu" class="form-control" type="number" name="nik_ibu" placeholder="16 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nmibu" class="col-sm-2 control-label">Nama Ibu :</label>
                <div class="col-sm-7">
                <input id="nmibu" class="form-control" type="text" name="nama_ibu" placeholder="Nama Lengkap Ibu" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="tmptlhribu" class="col-sm-2 control-label">Tempat Lahir Ibu :</label>
                <div class="col-sm-7">
                <input id="tmptlhribu" class="form-control" type="text" name="tp_lahir_ibu" placeholder="Tempat Lahir Ibu" required>
              </div>
            </div>

            <div class="form-group col-md-11">
              <label for="datepicker2" class="col-sm-2 control-label">Tanggal Lahir Ibu :</label>
              <div class="col-sm-7">
                  <input type="text" class="form-control" id="datepicker2" name="tgl_lahir_ibu" placeholder="Tanggal" required>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-md-11">
                <label for="kwnibu" class="col-sm-2 control-label">Negara Ibu :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="negara_ibu" name="negara_ibu" placeholder="Pilih Status">
                    <option value="wni">WNI</option>
                    <option value="wna">WNA</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="agmibu" class="col-sm-2 control-label">Agama Ibu :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Pilih Status">
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="pkjibu" class="col-sm-2 control-label">Pekerjaan Ibu :</label>
                <div class="col-sm-7">
                <input id="okjibu" class="form-control" type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="almtibu" class="col-sm-2 control-label">Alamat Ibu :</label>
                <div class="col-sm-7">
                <input id="almtibu" class="form-control" type="text" name="alamat_ibu" placeholder="Alamat Ibu" required>
              </div>
            </div>

            <!-- End data ibu -->
          </div>
            <!-- .col -->

      </div>
    <!-- row -->
      <div>
        <center>
            <div class="margin">
                <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <button  type="button" name="batal" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-ban"></i> Batal</button>
              </div>
        </center>
      </div>
      </form>
    </div>
  <!-- .box-body -->
  </div>
<!-- .form -->
</div>
  </section>
</div>
