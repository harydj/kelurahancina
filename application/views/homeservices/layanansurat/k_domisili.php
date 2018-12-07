<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Form Surat Keterangan Domisili
                    <small>index</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">form</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          /* display: none; <- Crashes Chrome on hover */
          -webkit-appearance: none;
          margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
          }
        </style>

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Isi Form Di Bawah Sesuai Data Diri Anda</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Pemohon" required>
                        </div>
                    </div>
                    <div id="transition-components-demo">
                    <div class="control-group form-group">
                      <div class="controls">
                      <label for="nik">Jenis Domisili :</label> <br>
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
                                template: '<div><div class="control-group form-group"><div class="controls"><label >NIK :</label><input placeholder="Masukkan NIK Pemohon" type="number" min="0" class="form-control"></div></div><div class="control-group form-group"><div class="controls"><label >Tujuan :</label><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan"></div></div></div>'
                              },
                              'v-b': {
                                template: '<div><div class="control-group form-group"><div class="controls"><label >Organisasi :</label><input type="text" class="form-control" placeholder="Masukkan Nama Organisasi/Yayasan"></div></div><div class="control-group form-group"><div class="controls"><label >Pemilik :</label><input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Organisasi/Yayasan"></div></div><div class="control-group form-group"><div class="controls"><label >Alamat :</label><input type="text" class="form-control" placeholder="Masukkan Alamat Organisasi/Yayasan"></div></div><div class="control-group form-group"><div class="controls"><label >Jenis :</label><input type="text" class="form-control" placeholder="Masukkan Jenis Organisasi/Yayasan"></div></div><div class="control-group form-group"><div class="controls"><label >Tujuan :</label><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan Surat"></div></div></div>'
                              },
                              'v-c': {
                                template: '<div><div class="control-group form-group"><div class="controls"><label >Usaha :</label><input type="text" class="form-control" placeholder="Masukkan Nama Usaha"></div></div><div class="control-group form-group"><div class="controls"><label >Pemilik :</label><input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Usaha"></div></div><div class="control-group form-group"><div class="controls"><label >Alamat :</label><input type="text" class="form-control" placeholder="Masukkan Alamat Usaha"></div></div><div class="control-group form-group"><div class="controls"><label>Jenis :</label><input type="text" class="form-control" placeholder="Masukkan Jenis Usaha"></div></div><div class="control-group form-group"><div class="controls"><label >Tujuan :</label><input type="text" class="form-control" placeholder="Masukkan Maksud/Tujuan Surat"></div></div></div>'
                              }
                            }
                          })
                    </script>
                </div>
                    <!-- <div class="control-group form-group">
                        <div class="controls">
                            <label>NIK:</label>
                            <input type="number" class="form-control" id="nik" placeholder="Masukkan NIK Pemohon" min="0" required>
                        </div>
                    </div> -->
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <center>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane"></i> Submit</button>
                    <button type="submit" class="btn btn-danger" onclick="self.history.back()"> <i class="fa fa-ban"></i> Batal</button>
                  </center>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>
