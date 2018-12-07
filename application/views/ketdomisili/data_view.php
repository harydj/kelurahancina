
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengajuan Surat Domisili
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
                                <a class='btn btn-info btn-xs' title='Edit Data' href='<?php echo base_url()."Suratdomisili/post"?>'><span class='glyphicon glyphicon-edit'></span></a>
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
                <form method="post" action="<?php echo base_url()."Suratdomisili"?>/simpan">
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

                                  <input v-model="view" type="radio" value="v-a" id="ar" name="jenis"><label for="ar">&nbsp;Pribadi</label>
                                  <input v-model="view" type="radio" value="v-b" id="b" name="jenis" style="margin-left:10px;"><label for="b">&nbsp;Organisasi</label>
                                  <input v-model="view" type="radio" value="v-c" id="c" name="jenis" style="margin-left:10px;"><label for="c">&nbsp;Usaha</label>
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

  //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });

  </script>
