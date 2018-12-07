
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Data Kartu Keluarga
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
      <div class="row">
        <div class="col-xs-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
              <h3 class="box-title">Data Kartu Keluarga Kelurahan Cina</h3>
              <!-- <button type="button" class='pull-right btn btn-primary btn-sm' data-toggle="modal" data-target="#myModal" href='#'>Tambah Penduduk</button> -->
        </div>

            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No KK</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Pekerjaan</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>12345678</td>
                  <td>98919191</td>
                  <td>Rudi Hariono</td>
                  <td>Guru</td>
                  <td>Beristri</td>
                  <td><center>
                                 <a class='btn btn-info btn-xs' title='Lihat Detail' href='#'><span class='glyphicon glyphicon-search' data-toggle="modal" data-target="#myModal"></span></a>
                                 <a class='btn btn-danger btn-xs' title='Delete Data' href='#'><span class='glyphicon glyphicon-remove'></span></a>
                       </center>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog" role="document">

    <div class="modal-content">

    <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>

    <h4 class="modal-title">Detail Anggota Keluarga</h4>
    </div>
          <div class="modal-body">
            <!--form start-->
            <div id="alert" class="alert hidden" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span id="alertTitle" class="sr-only">Error:</span>
              <span id="alertBody">Enter a valid email address</span>
            </div>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>NIK</th>
                      <th>Nama Anggota KK</th>
                      <th>Usia</th>
                      <th>Jenis Kelamin</th>
                      <th>Pekerjaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1231231231</td>
                      <td>Rudi Hariono</td>
                      <td>44</td>
                      <td>Laki-Laki</td>
                      <td>Guru</td>
                    </tr>
                    <tr>
                      <td>1231231211</td>
                      <td>Rudi Haranti</td>
                      <td>40</td>
                      <td>Perempuan</td>
                      <td>IRT</td>
                    </tr>
                    <tr>
                      <td>14562375431</td>
                      <td>Rudi Hariutomo</td>
                      <td>14</td>
                      <td>Laki-Laki</td>
                      <td>Pelajar</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <div class="modal-footer">
            <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
          </div>

        </div>

      </div>

    </div>
    <!-- end modal -->
