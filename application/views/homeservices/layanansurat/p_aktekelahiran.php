<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Form Surat Pengantar Akte Kelahiran
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>NIK:</label>
                            <input type="number" class="form-control" id="nik" placeholder="Masukkan NIK Pemohon" min="0" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Anak:</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Anak" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">
                        <label>Jenis Kelamin Anak:</label>
                        <select class="form-control" id="jk" name="jk" placeholder="Pilih Jenis Kelamin Anak">
                          <option value="def" selected disabled>-Pilih Jenis Kelamin Anak-</option>
                          <option value="lk">Laki-Laki</option>
                          <option value="pr">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Tempat Lahir Anak:</label>
                            <input type="text" class="form-control" id="tmptlhr" placeholder="Masukkan Tempat Lahir Anak" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                          <label for="tgllahir">Tanggal Lahir Anak:</label>
                              <input type="text" class="form-control" id="tgllahir" placeholder="Tanggal" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">
                        <label>Agama:</label>
                        <select class="form-control" id="agama" name="agama">
                          <option value="def" selected disabled>-Pilih Agama-</option>
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Anak Ke-:</label>
                            <input type="text" class="form-control" id="anakke" placeholder="Anak Ke-" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>No Surat RS/Bidan:</label>
                            <input type="number" min="0" class="form-control" id="nors" placeholder="Masukkan No Surat RS/Bidan">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Alamat:</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>NIK Ayah:</label>
                            <input type="number" min="0" class="form-control" id="nikayah" placeholder="Masukkan NIK Ayah">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>NIK Ibu:</label>
                            <input type="number" min="0" class="form-control" id="nikibu" placeholder="Masukkan NIK Ibu">
                        </div>
                    </div>

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
