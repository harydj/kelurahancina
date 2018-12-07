<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Layanan Publik
                    <small>Index</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">layananpublik</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="<?php echo base_url()."assets" ?>/img/Lp.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->


        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Service Tabs</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-external-link"></i> Surat Pengantar</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-edit"></i> Surat Keterangan</a>
                    </li>

                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Daftar Surat-Surat Pengantar</h4>
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Surat Pengantar</th>
                            <th style="width: 60px">Aksi</th>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>Pembuatan KTP</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/pktp"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Akte Kelahiran</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/paktekelahiran"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Pengantar Nikah</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/pnikah"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Laporan Kehilangan</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/pkehilangan"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Pengantar Tidak Mampu (Beasiswa)</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/pbeasiswa"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Daftar Surat-Surat Keterangan</h4>
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Surat Keterangan</th>
                            <th style="width: 60px">Aksi</th>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>Domisili</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/kdomisili"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Belum Nikah</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/kbelumnikah"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Tidak Mampu (SKTM)</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/ktidakmampu"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Laporan Kematian</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/kkematian"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Umum</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/kumum"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td>Usaha</td>
                            <td>
                              <center>
                                <a class='btn btn-primary btn-xs' title='Buat Surat' href='<?php echo base_url()."Layananpublik/kusaha"?>'><span class='fa fa-pencil'> Buat Surat</span></a>
                              </center>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Service List</h2>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Two</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Five</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Six</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Seven</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Eight</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Service Nine</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /.row -->

        <hr>
