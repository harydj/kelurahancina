<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets" ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username')?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu nav">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url()."Admin"?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Data Kelurahan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."Infokelurahan"?>"><i class="fa fa-circle-o"></i>Informasi Kelurahan</a></li>
          <li><a href="<?php echo base_url()."Datapegawai"?>"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
          <li><a href="<?php echo base_url()."Formatnosurat"?>"><i class="fa fa-circle-o"></i>Format Nomor Surat</a></li>
          <li><a href="<?php echo base_url()."Datainfrastruktur"?>"><i class="fa fa-circle-o"></i>Data Infrastuktur</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Data Penduduk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."Infokependudukan"?>"><i class="fa fa-circle-o"></i>Informasi Kependudukan</a></li>
          <li><a href="<?php echo base_url()."Datakelahiran"?>"><i class="fa fa-circle-o"></i>Data Kelahiran</a></li>
          <li><a href="<?php echo base_url()."Datakematian"?>"><i class="fa fa-circle-o"></i>Data Kematian</a></li>
          <li><a href="<?php echo base_url()."Datakk"?>"><i class="fa fa-circle-o"></i>Data Kartu Keluarga</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-exchange"></i>
          <span>Mutasi Penduduk</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."Mutasidtg"?>"><i class="fa fa-circle-o"></i>Mutasi Masuk</a></li>
          <li><a href="<?php echo base_url()."Mutasipndh"?>"><i class="fa fa-circle-o"></i>Mutasi Keluar</a></li>
          <li><a href="<?php echo base_url()."Listmutasi"?>"><i class="fa fa-circle-o"></i>Data Mutasi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-text"></i> <span>Pelayanan Surat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."Pembuatanktp"?>"><i class="fa fa-circle-o"></i>Pembuatan e-KTP</a></li>
          <li><a href="<?php echo base_url()."Aktekelahiran"?>"><i class="fa fa-circle-o"></i>Akte Kelahiran</a></li>
          <li><a href="<?php echo base_url()."Suratdomisili"?>"><i class="fa fa-circle-o"></i>Ket. Domisili</a></li>
          <li><a href="<?php echo base_url()."Suratblmmenikah"?>"><i class="fa fa-circle-o"></i>Ket. Belum Nikah</a></li>
          <li><a href="<?php echo base_url()."Kettdkmampu"?>"><i class="fa fa-circle-o"></i>Ket. Tidak Mampu (SKTM)</a></li>
          <li><a href="<?php echo base_url()."Suratkematian"?>"><i class="fa fa-circle-o"></i>Ket. Kematian</a></li>
          <li><a href="<?php echo base_url()."Keteranganumum"?>"><i class="fa fa-circle-o"></i>Ket. Umum</a></li>
          <li><a href="<?php echo base_url()."Keteranganusaha"?>"><i class="fa fa-circle-o"></i>Ket. Usaha</a></li>
          <li><a href="<?php echo base_url()."Suratnikah"?>"><i class="fa fa-circle-o"></i>Pengantar Nikah</a></li>
          <li><a href="<?php echo base_url()."Surathilang"?>"><i class="fa fa-circle-o"></i>Pengantar Lap. Kehilangan</a></li>
          <li><a href="<?php echo base_url()."Pernytdkmampu"?>"><i class="fa fa-circle-o"></i>Peng. Tdk Mampu (Beasiswa)</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url()."Pengaduan"?>">
            <i class="fa fa-exclamation-circle"></i> <span>Data Pengaduan</span>
        </a>
      </li>
      <li class="#">
        <a href="#">
          <i class="fa fa-gear"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url()."Profile"?>"><i class="fa fa-circle-o"></i>Profil</a></li>
          <li><a href="profile.html"><i class="fa fa-circle-o"></i>Backup Data</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
