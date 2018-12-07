<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pengajuan Surat Pembuatan KTP
      <small>index</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>
  <?php
  foreach ($data->result() as $row) {
 ?>
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
              <form method="post" action="<?php echo base_url()."Pembuatanktp/update/".$row->nik;?>?>">
              <!-- Data diri -->
              <div class="form-group col-md-11">
                  <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                  <div class="col-sm-7">
                  <input id="nama" name="nama" value="<?php echo $row->nama; ?>" class="form-control" type="text" placeholder="Masukkan Nama Pemohon" required>
                </div>
              </div>
              <!-- .form -->
              <div class="form-group col-md-11">
                  <label for="nik" class="col-sm-2 control-label">NIK :</label>
                  <div class="col-sm-7">
                  <input id="nik" name="nik" class="form-control" value="<?php echo $row->nik; ?>" type="number" placeholder="Masukkan NIK Pemohon" required>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                  <div class="col-sm-7" id="app">
                  <input id="nosrt" name="nosrt" value="<?php echo $row->no_surat; ?>" class="form-control" type="number" placeholder="Masukkan No Surat" required>
                  <small style="color:red;">*keterangan telah melaksanakan perekaman KTP Elektronik</small>
                  <br><small>KCN/</small><small>{{<?php echo $row->no_surat; ?>}}</small><small>/2/2017</small>
                </div>
              </div>

              <div class="form-group col-md-11">
                  <label for="ttd" class="col-sm-2 control-label">Pejabatan Tanda Tangan :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="ttd" name="ttd" placeholder="Pilih TTD">
                      <option value="<?php echo $row->ttd_pejabat; ?>" selected disabled><?php echo $row->ttd_pejabat; ?></option>
                      <option value="Sarifudin">Sarifudin</option>
                      <option value="Ahmanto">Ahmanto</option>
                    </select>
                </div>
              </div>

              <div class="form-group col-md-11">
                <label for="datepicker" class="col-sm-2 control-label">Tanggal Pengajuan :</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="datepicker" value="<?php echo $row->tgl_pengajuan; ?>" name="tgl_pengajuan" placeholder="Tanggal" required>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group col-md-11">
                  <label for="ttd" class="col-sm-2 control-label">Status :</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="status" name="status" placeholder="Pilih Status">
                      <option value="<?php echo $row->status; ?>" selected disabled><?php echo $row->status; ?></option>
                      <option value="Proses">Proses</option>
                      <option value="Selesai">Selesai</option>
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
                  <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                  <button  type="button" name="cetak" id="btncetak" class="btn btn-success"><i class="fa fa-print"></i> Cetak</button>
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
<?php } ?>
<script>
var app = new Vue({
el: '#app',
data: {
  getMessage: '(Nomor Surat)'
}
})
</script>
