<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Post
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
      <?php
      $no = 1;
      foreach ($data->result() as $row) {
     ?>
       <div class="row">
         <div class="box">
           <form id="form" enctype="multipart/form-data" method="post" action="<?php echo base_url()."infokelurahan/update/".$row->id;?>">
           <div class="form-group" >
             <input type="text" class="form-control" name="judul" value="<?php echo $row->judul;?>" placeholder="MASUKKAN JUDUL DISINI" required>
           </div>
           <div class="form-group" >
             <input type="file" class="form-control" id="filefoto" name="filefoto" value="<?php echo $row->gambar;?>" placeholder="Masukkan Foto">
           </div>
               <div class="box-body pad">
               <form>
               <textarea id="isi" name="isi" rows="10" cols="80"><?php echo $row->isi;?>
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
               <?php } ?>
               </form>
             <!-- /.box -->
         </div>
         <!-- /.tab-pane -->
       </div>
     </section>

  </div>


    <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('isi');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>
