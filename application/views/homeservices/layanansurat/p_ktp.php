  <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Form Surat Pengantar KTP
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
                <form method="post" action="<?php echo base_url()."Pembuatanktp"?>/simpan_c">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Lengkap:</label>
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Pemohon" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>NIK:</label>
                            <input type="number" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK Pemohon" min="0" required>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <center>
                    <button type="submit" class="btn btn-primary"> <i class="fa fa-paper-plane"></i> Submit</button>
                    <button type="button" class="btn btn-danger" onclick="self.history.back()"> <i class="fa fa-ban"></i> Batal</button>
                  </center>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>
