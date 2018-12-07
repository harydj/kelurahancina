<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelurahan Cina</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets" ?>/bootstrap/css_h/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()."assets" ?>/bootstrap/css_h/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets" ?>/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Select2 -->
   <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/select2/select2.min.css">
   <!--Bootstrap Time Picker-->
    <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
   <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/datepicker/datepicker3.css">
   <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/daterangepicker/daterangepicker.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/datatables/dataTables.bootstrap.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/iCheck/all.css">

    <!-- b -->
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- footer data -->
    <!-- jQuery -->
    <script src="<?php echo base_url()."assets" ?>/bootstrap/js_h/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets" ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url()."assets" ?>/plugins/select2/select2.full.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url()."assets" ?>/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url()."assets" ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url()."assets" ?>/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url()."assets" ?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url()."assets" ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url()."assets" ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <!-- end footer data -->

    <!-- Vue -->
    <script src="https://unpkg.com/vue"></script>

</head>

<body>

    <style>
        .header1{
          background-color: #dd4b39;
          border-color: #dd4b39;
        }

        .word-color li a{
          color: #ffffff !important;
        }

        .word-color2{
          color: #ffffff !important;
        }

        .dropdownc li a{
          color: #000 !important;
        }

        .droptogglec:focus{
          background-color: #ad3f3f !important;
        }


        .buttoncolor{
          border-color: #ad3f3f !important;
        }

        .buttonhover{
          background-color: #ad3f3f !important;
        }
        .tabcst:hover {
            background-color: #ad3f3f !important;
        }
    </style>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top header1" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle buttoncolor buttonhover" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand word-color2"  href="<?php echo base_url()?>">Kelurahan Cina</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right word-color">
                    <!-- <li>
                        <a href="#" class="tabcst"><i class="fa fa-building-o"></i> Profil Kelurahan</a>
                    </li>
                    <li>
                        <a href="#" class="tabcst"><i class="fa fa-sitemap"></i> Organisasi</a>
                    </li> -->
                    <li>
                        <a href="#" class="tabcst"><i class="fa fa-phone"></i> Kontak</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."Layananpublik"?>" class="tabcst"><i class="fa fa-send-o"></i> Layanan Publik</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."Pengaduanhp"?>" class="tabcst"><i class="fa fa-bullhorn"></i> Pengaduan</a>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle droptogglec" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdownc">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url()."Ceksurat"?>" class="tabcst"><i class="fa fa-refresh"></i> Cek Surat</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."Login"?>" class="tabcst" target="_blank"><i class="fa fa-user"></i> Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
