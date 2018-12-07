  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelurahan
        <small>Info Kelurahan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
              <li class="active"><a href="#tab_1" data-toggle="tab">Konten</a></li>
              <li><a href="#tab_2" data-toggle="tab">Tulis Konten</a></li>
              <!-- <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li> -->
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
                 <th>Judul</th>
                 <th>Penulis</th>
                 <th>Date</th>
                 <th>Status</th>
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
                 <td><?php echo $row->judul; ?></td>
                 <td><?php echo $row->penulis; ?></td>
                 <td><?php echo $row->tanggal; ?></td>
                 <td><?php echo $row->status; ?></td>
                 <td><center>
                                <a class='btn btn-info btn-xs' title='Lihat Detail' href='<?php echo base_url()."Blogpost/view/".$row->id;?>'><span class='glyphicon glyphicon-search'></span></a>
                                <a class='btn btn-success btn-xs' title='Edit Data' href='<?php echo base_url()."infokelurahan/editpost/".$row->id;?>'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Delete Data' href='<?php echo base_url()."infokelurahan/delete_by_id/".$row->id;?>'><span class='glyphicon glyphicon-remove'></span></a>
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
              <div class="tab-pane"  id="tab_2">
                <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."infokelurahan"?>/simpan">
                <div class="form-group" >
                  <input type="text" class="form-control" name="judul" placeholder="MASUKKAN JUDUL DISINI" required>
                </div>
                <div class="form-group" >
                  <input type="file" accept="image/*" class="form-control" id="filefoto" name="filefoto" placeholder="Masukkan Foto" required>
                </div>
                    <div class="box-body pad">
                    <form>
                    <textarea id="isi" name="isi" rows="10" cols="80">
                    </textarea>
                      <style>
                        .custom-btn{
                          width: 100px;
                          display: inline-block;
                          margin-right: 15px;

                          margin-top: 25px !important;
                        }
                      </style>

                      <center>
                          <div>
                          <button style="margin-top:5px;" id="submit" type="submit" name="publish" class="btn btn-block btn-primary custom-btn">Publish</button>
                          <button type="submit" id="submit" name="draft" class="btn btn-block btn-warning custom-btn">Draft</button>
                        </div>
                      </center>
                    </form>
                    </div>
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
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('isi');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
