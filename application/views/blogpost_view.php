<!-- Page Content -->
    <div class="container">
      <?php
      foreach ($data->result() as $row) {
     ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $row->judul; ?>
                    <small>by <a href="#"><?php echo $row->penulis; ?></a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on <?php echo $row->tanggal; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/img/<?=$row->gambar;?> " alt="User profile picture">
                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $row->isi; ?></p>
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>


                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Sambutan Kepala Lurah</h4>
                    <p>Saya sangat berterima kasih kepada para mahasiswa Telkom University atas pengabdiannya kepada kelurahan cina untuk membuat website resmi kelurahan cina</p>
                </div>

            </div>
            <?php } ?>
        </div>
        <!-- /.row -->
