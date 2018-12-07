
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/morris/morris.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/dist/css/skins/_all-skins.min.css">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Select2 -->
 <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/select2/select2.min.css">
 <!--Bootstrap Time Picker-->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/datepicker/datepicker3.css">
 <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/daterangepicker/daterangepicker.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()."assets" ?>/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!--Dari Footer-->
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url()."assets" ?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url()."assets" ?>/bootstrap/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url()."assets" ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url()."assets" ?>/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url()."assets" ?>/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url()."assets" ?>/dist/js/demo.js"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="<?php echo base_url()."assets" ?>/plugins/morris/morris.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url()."assets" ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."assets" ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
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

  <!-- CK Editor -->
  <script src="<?php echo base_url()."assets" ?>/plugins/ckeditor/ckeditor.js"></script>
  <script>UPLOADCARE_PUBLIC_KEY = 'cb1e3780e6c57267ceda';</script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets" ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url()."assets" ?>/plugins/iCheck/icheck.min.js"></script>

<!-- Vue -->
<script src="https://unpkg.com/vue"></script>

  <!--End-->

</head>
<body class="hold-transition skin-red-light sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."Admin" ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CI</b>NA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kel</b> CINA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()."assets" ?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets" ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username')?> - <?php echo $this->session->userdata('status')?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()."Logout"?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <?php
  $this->load->view('sidebar');
  ?>
