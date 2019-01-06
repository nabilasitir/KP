<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>El-Haqq Tour</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

     <!-- FullCalendar -->
    <link href="<?php echo base_url();?>assets/admin/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <img width="50" height="50" src="<?php echo base_url();?>assets/img/logo.jpg" class="custom-logo" alt="El-Haqq Tour &amp; Travel"/><span>  El-Haqq Tour</span></a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a ><i class="fa fa-edit"></i>Content Beranda<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminAgendaAcara">Agenda Acara</a></li>
                      <li><a href="<?php echo base_url();?>adminBerita">Berita</a></li>
                      <li><a href="<?php echo base_url();?>adminVisiMisi">Visi & Misi </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>Paket Layanan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminLayananUmrah">Umrah</a></li>
                      <li><a href="<?php echo base_url();?>adminTourMuslim">Tour Muslim</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Jadwal <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminJadwalUmrah">Umrah</a></li>
                      <li><a href="<?php echo base_url();?>adminJadwalTour">Tour Muslim</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Daftar Jamaah<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminCustomerHaji">Haji</a></li>
                      <li><a href="<?php echo base_url();?>adminCustomerUmrah">Umrah</a></li>
                      <li><a href="<?php echo base_url();?>adminCustomerTour">Tour Muslim</a></li>
                    </ul>
              </div>
              <div class="menu_section">
                <h3>Fitur Lainnya</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-folder"></i> Files <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminDownload">Petunjuk Haji & Umrah</a></li>
                      <li><a href="<?php echo base_url();?>adminKelengkapanPeserta">Data Kelengkapan Peserta</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa  fa-image"></i> Gambar & Video <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>adminTestimoni">Testimoni</a></li>
                      <li><a href="<?php echo base_url();?>adminGaleri">Galeri</a></li>
                      <li><a href="<?php echo base_url();?>adminVideo">Video</a></li>
                      
                    </ul>
                  </li>                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" glyphicon glyphicon-user"></span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/dashboard/logout"  type="submit"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
            <?php echo $contents; ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="copyright" style="text-align:center; font-size:15px; margin: 10px 0px 10px;">Copyright 2018 
                    <a href="https://elhaqqtour.com/" title="El-Haqq Tour &amp; Travel" ><span>El-Haqq Tour &amp; Travel</span></a>. 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
      <!-- Assets yang dibutuhkan -->
        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url();?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url();?>assets/admin/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo base_url();?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="<?php echo base_url();?>assets/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- Flot -->
        <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo base_url();?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo base_url();?>assets/admin/vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo base_url();?>assets/admin/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url();?>assets/admin/vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- FullCalendar -->
        <script src="<?php echo base_url();?>assets/admin/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
        
        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url();?>assets/admin/build/js/custom.min.js"></script>
        <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url();?>assets/admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
  </body>
</html>