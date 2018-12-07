<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cek Surat Pengantar/Keterangan
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

        <style media="screen">
                  .txtcs{
                  resize: none;
                  height: 155px !important;
              }
        </style>
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-12 ">
                <h3>Silahkan Cek Status Surat Anda pada Tabel Di Bawah Ini</h3>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Surat</th>
                  <th>Nama Pemohon</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Jenis Surat</th>
                  <th>Status Surat</th>
                </tr>
                </thead>
                <?php
                  $no = 1;
                  foreach ($data->result() as $row) {
               ?>
                <tbody>
                  <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row->no_surat; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->tgl_pengajuan; ?></td>
                  <td><?php echo $row->jenis_surat; ?></td>
                  <td><?php echo $row->status; ?></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>

        </div>
        <!-- /.row -->

        <hr>
