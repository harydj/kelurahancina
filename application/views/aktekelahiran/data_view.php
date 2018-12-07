
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengajuan Surat Akte Kelahiran
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
      <!-- Main row -->
       <div class="row">
         <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-user"></i> Data Pemohon</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-envelope"></i> Buat Surat</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>No</th>
                 <th>No Surat</th>
                 <th>Nama Pemohon</th>
                 <th>Tanggal Pengajuan</th>
                 <th>Status Surat</th>
                 <th>Action</th>
               </tr>
               </thead>
               <tbody>
                 <?php
                 $no = 1;
                 foreach ($data->result() as $row) {
                ?>
               <tr>
                 <td><?php echo $no++; ?></td>
                 <td><?php echo $row->no_surat; ?></td>
                 <td><?php echo $row->nama; ?></td>
                 <td>22/2/2017</td>
                 <td>Proses</td>
                 <td><center>
                                <a class='btn btn-primary btn-xs' title='Ubah Status' href='#'><span class='fa fa-rotate-left'></span></a>
                                <a class='btn btn-info btn-xs' title='Edit Data' href='<?php echo base_url()."Aktekelahiran/post"?>'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-success btn-xs' title='Print' href='#'><span class='glyphicon glyphicon-print'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='#'><span class='glyphicon glyphicon-remove'></span></a>
                      </center>
                 </td>
               </tr>
               <?php } ?>
               </tbody>
             </table>
           </div>
           <!-- /.box-body -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form method="post" action="<?php echo base_url()."Aktekelahiran"?>/simpan">
                  <div class="box-header with-border">
                    <h3 class="box-title">Formulir Pengajuan Surat</h3>
                  </div>
                  <div class="form-horizontal">
                    <div class="box-body pad">
                      <div class="row">
                      <div class="col-md-14">
                        <!-- Data diri -->
                        <div class="form-group col-md-11">
                            <label for="nama" class="col-sm-2 control-label">Nama Lengkap :</label>
                            <div class="col-sm-7">
                            <input id="nama" name="nama" class="form-control" type="text" placeholder="Masukkan Nama Pemohon" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="nosrt" class="col-sm-2 control-label">No Surat :</label>
                            <div class="col-sm-7">
                              <div id="app">
                            <input id="nosrt" name="nosrt" v-model="getMessage" class="form-control" type="number" placeholder="Masukkan No Surat (4 Digit)" required>
                            <small>SKCN/</small><small>{{getMessage}}</small><small>/2/2017</small>
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="namaa" class="col-sm-2 control-label">Nama Lengkap Anak :</label>
                            <div class="col-sm-7">
                            <input id="namaa" name="nama_anak" class="form-control" type="text" placeholder="Masukkan Nama Anak" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="kwn" class="col-sm-2 control-label">Jenis Kelamin Anak :</label>
                            <div class="col-sm-7">
                              <select class="form-control" id="kwn" name="jk_anak" placeholder="Pilih Jenis Kelamin Anak">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="tplhr" class="col-sm-2 control-label">Tempat Lahir :</label>
                            <div class="col-sm-7">
                            <input id="tplhr" name="tplhr" class="form-control" type="text" placeholder="Masukkan Tempat Lahir" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                          <label for="datepicker" class="col-sm-2 control-label">Tanggal Lahir Anak :</label>
                          <div class="col-sm-7">
                              <input type="text" class="form-control" id="datepicker" name="tgl" placeholder="Tanggal" required>
                          </div>
                          <!-- /.input group -->
                        </div>

                        <div class="form-group col-md-11">
                            <label for="agm" class="col-sm-2 control-label">Agama :</label>
                            <div class="col-sm-7">
                              <select class="form-control" id="agm" name="agama" placeholder="Pilih Status">
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budah">Budha</option>
                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                <option value="Lainnya">Lainnya</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="anakke" class="col-sm-2 control-label">Anak Ke- :</label>
                            <div class="col-sm-7">
                            <input id="anakke" name="anak_ke" class="form-control" type="text" placeholder="Anak Ke-" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="nobdn" class="col-sm-2 control-label">No Surat RS/Bidan :</label>
                            <div class="col-sm-7">
                            <input id="nobdn" name="nobdn" class="form-control" type="number" placeholder="Masukkan No Surat RS/Bidan" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="almt" class="col-sm-2 control-label">Alamat :</label>
                            <div class="col-sm-7">
                            <input id="almt" name="alamat" class="form-control" type="text" placeholder="Masukkan Alamat" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="nikibu" class="col-sm-2 control-label">NIK Ibu :</label>
                            <div class="col-sm-7">
                            <input id="nikibu" name="nik_ibu" class="form-control" type="number" placeholder="Masukkan NIK Ibu" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="nikayah" class="col-sm-2 control-label">NIK Ayah :</label>
                            <div class="col-sm-7">
                            <input id="nikayah" name="nik_ayah" class="form-control" type="number" placeholder="Masukkan NIK Ayah" required>
                          </div>
                        </div>

                        <div class="form-group col-md-11">
                            <label for="ttd" class="col-sm-2 control-label">Tanda Tangan Oleh :</label>
                            <div class="col-sm-7">
                              <select class="form-control" id="ttd" name="ttd" placeholder="Pilih TTD">
                                <option value="Sarifudin">Sarifudin</option>
                                <option value="Ahmanto">Ahmanto</option>
                              </select>
                          </div>
                        </div>

                      </div>
                      <!-- .col -->
                    </div>
                    <!-- .row -->

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
                              <button  type="submit" name="simpan" id="btnsimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                              <button  type="button" name="batal" class="btn btn-danger" onclick="refreshPage()"><i class="fa fa-ban"></i> Batal</button>
                            </div>
                      </center>
                    </div>
                  </div>
                  <!-- .body pad -->
                </div>
                <!-- /form horizontal -->
                </form>
                  <!-- /.box -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
  function refreshPage(){
      window.location.reload();
  }

  var app = new Vue({
  el: '#app',
  data: {
    getMessage: '(Nomor Surat)'
  }
  })

  </script>
