<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Form Surat Keterangan Kematian
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
                      <label>NIK:</label>
                      <input type="number" class="form-control" id="nik1" placeholder="Masukkan NIK yang Meningal" min="0" required>
                    </div>
                  </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Lengkap:</label>
                            <input type="text" class="form-control" id="name1" placeholder="Masukkan Nama Lengkap Meninggal" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                          <label for="datepicker2">Tanggal Kematian:</label>
                              <input type="text" class="form-control" id="datepicker2" placeholder="Masukkan Tanggal Kematian" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Tempat Kematian:</label>
                            <input type="text" class="form-control" id="tmpt" placeholder="Masukkan Tempat Kematian, e.g Rumah Sakit" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Penyebab Kematian:</label>
                            <input type="text" class="form-control" id="sbb" placeholder="Masukkan Penyebab Kematian" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                      <div class="controls">
                        <label>NIK Pelapor:</label>
                        <input type="number" class="form-control" id="nik2" placeholder="Masukkan NIK Pelapor" min="0" required>
                      </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Lengkap Pelapor:</label>
                            <input type="text" class="form-control" id="name2" placeholder="Masukkan Nama Lengkap Pelapor" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Hubungan dengan yang Meninggal:</label>
                            <input type="text" class="form-control" id="hub" placeholder="Masukkan Hubungan dengan yang Meninggal, e.g Kepala Keluarga" required>
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
