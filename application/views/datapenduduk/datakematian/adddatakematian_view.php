<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Data Kematian
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
          <h3 class="box-title">Formulir Data Kematian Baru</h3>
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
              <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."Datakematian"?>/simpan">
              <!-- Data diri -->
              <div class="form-group col-md-11">
                <label for="nkk" class="col-sm-2 control-label">Nomor KK :</label>
                <div class="col-sm-7">
                  <input id="nkk" name="no_kk" class="form-control" type="number" placeholder="16 Digit" required>
                </div>
              </div>

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
                <label for="nktp" class="col-sm-2 control-label">Nomor KTP :</label>
                <div class="col-sm-7">
                <input id="nktp" name="no_ktp" class="form-control" type="number" placeholder="16 Digit" required>
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
                <label for="jk" class="col-sm-2 control-label">Jenis Kelamin :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="jk" name="jenis_kelamin" placeholder="Pilih Status">
                    <option value="n/a" selected disabled>-Pilih Jenis Kelamin-</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="spn" class="col-sm-2 control-label">Status Pernikahan :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="skk" name="st_pernikahan" placeholder="Pilih Status">
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
                <input id="nktp" name="no_ktp_pasangan"  class="form-control" type="number" placeholder="16 Digit">
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="tpl" class="col-sm-2 control-label">Tempat Lahir :</label>
                <div class="col-sm-7">
                <input id="tpl" name="tempat_lahir" class="form-control" type="text" placeholder="Kota/Desa" required>
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
                <input id="almt" name="alamat" class="form-control" type="text" placeholder="Jl." required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="agm" class="col-sm-2 control-label">Agama :</label>
                <div class="col-sm-7">
                  <select class="form-control" id="agm" name="agama" placeholder="Pilih Status">
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
                <input id="pkrj" name="pekerjaan" class="form-control" type="text" placeholder="Pekerjaan Saat Ini" required>
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
                <input id="nikayah" name="nik_ayah" class="form-control" type="number" placeholder="16 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nmayah" class="col-sm-2 control-label">Nama Ayah :</label>
                <div class="col-sm-7">
                <input id="nmayah" name="nama_ayah" class="form-control" type="text" placeholder="Nama Lengkap Ayah" required>
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
                <input id="nikibu" name="nik_ibu" class="form-control" type="number" placeholder="16 Digit" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="nmibu" class="col-sm-2 control-label">Nama Ibu :</label>
                <div class="col-sm-7">
                <input id="nmibu" name="nama_ibu" class="form-control" type="text" placeholder="Nama Lengkap Ibu" required>
              </div>
            </div>

            <!-- End data ibu -->
            <br>
            <div class="form-group col-md-11">

                <div class="col-sm-12">
                  <center><h2 class="page-header"></h2></center>
                </div>
            </div>
            <!-- Sebab -->
            <div class="form-group col-md-11">
                <label for="tptmen" class="col-sm-2 control-label">Tempat Meninggal :</label>
                <div class="col-sm-7">
                <input id="tptmen" name="tp_meninggal" class="form-control" type="text" placeholder="Tempat Meninggal" required>
              </div>
            </div>

            <div class="form-group col-md-11">
                <label for="sebab" class="col-sm-2 control-label">Sebab Meninggal :</label>
                <div class="col-sm-7">
                <input id="sebab" name="sebab_meninggal" class="form-control" type="text" placeholder="Sebab Meninggal" required>
              </div>
            </div>

            <div class="form-group col-md-11">
              <label for="datepicker2" class="col-sm-2 control-label">Tanggal Meninggal :</label>
              <div class="col-sm-7">
                  <input type="text" name="tgl_meninggal" class="form-control" id="datepicker2" placeholder="Tanggal" required>
              </div>
              <!-- /.input group -->
            </div>
            <!-- end Sebab -->

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
