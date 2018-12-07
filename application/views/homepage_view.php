
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <div class="fill" style="background-image:url('<?php echo base_url()."assets" ?>/img/fix.png');"></div>
          <!-- <div class="carousel-caption">
              <h2>Caption 1</h2>
          </div> -->
      </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url()."assets" ?>/img/Visi.png');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('<?php echo base_url()."assets" ?>/img/Misi.png');"></div>
        </div>
    </div>

    <!-- Controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a> -->
</header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Selamat Datang di Website Resmi Kelurahan Cina
                </h1>
            </div>
            <?php
            foreach ($data->result() as $row) {
              $string = $row->isi;
              $length = strlen($string);

              if ($length < 100) {
                  $string .= str_repeat('&nbsp', 100 - $length);
              } else {
                  $string = substr($string, 0, 100);
              }
           ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><?php echo $row->judul;?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo $string;?>....</p>
                        <a href="<?php echo base_url()."Blogpost/view/".$row->id;?>" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <style type="text/css">
          div.ui-menu li {
              list-style:none;
              background-image:none;
              background-repeat:none;
              background-position:0;
          }
          ul
          {
              list-style-type:none;
              padding:0px;
              margin:0px;
          }
          li
          {
              background-image:url(sqpurple.gif);
              background-repeat:no-repeat;
              background-position:0px 5px;
              padding-left:14px;
          }
          </style>


        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Profile Kepala Kelurahan</h2>
            </div>
            <div class="col-md-6">
              <p>Kedatuan Cina, dipimpin oleh La Sattumpugi. Kemudian beliau digantikan oleh anaknya yaitu We Cudai yang kemudian dinikahi oleh Sawerigading. Kisah pernikahan We Cudai dan Sawerigading inilah yang terekam dalam epos Ilagaligo. Dalam perkembangannya, seorang Datu Cina yaitu La Sangaji menjelang wafatnya, meminta agar nama Cina diganti menjadi Pammana. Akhirnya Kedatuan Cina berubah menjadi Kedatuan Pammana. Namun nama Cina masih diabadikan hingga sekarang yaitu Kelurahan Cina</p>
              <ul>
                <li><strong><span class="fa fa-user"></span> Amshir Andi Timbang</strong>
                </li>
                <li><span class="fa fa-phone"></span> 081-890-192-0192</li>
                <li><span class="fa fa-building"></span> Jl. Poros Bosowa Kelurahan No 12 Cina</li>
                <li><span class="fa fa-envelope"></span> anditimbang@gmail.com</li>
                <li><span class="fa fa-facebook"></span> Amshir Andi Timbang</li>
              </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo base_url()."assets" ?>/img/lurahcina.jpg" alt="Kepala Lurah Kelurahan Cina">
            </div>
        </div>
        <!-- /.row -->

        <!-- <hr> -->

        <!-- Call to Action Section -->
        <!-- <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div> -->

        <hr>
    <!-- /.container -->
