<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>El-Haqq Tour &amp; Travel</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.min.css">

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/carousel.css" />

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/isotope/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/isotope/stylenav.css">

        <!--Main Stylesheet-->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">

         <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area" style="width:100%">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>Jakarta Selatan</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>+62 813-3000-1485</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 zero_mp">
                                <div class="phone">
                                    <i class="glyphicon glyphicon-envelope floatleft"></i>
                                    <p>info@elhaqq.com</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-md-3">
                                <div class="social_icon text-right">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                 <img src="<?php echo base_url();?>assets/img/logo.jpg" class="custom-logo" alt="El-Haqq Tour &amp; Travel " style=" margin-top:10px;"/>
                                <p class="site-title" style=" margin-top:10px;"><a href="#" rel="home" >El-Haqq Tour &amp; Travel</a></p>
                                <p class="site-description" style=" margin-bottom:10px;">Website Resmi El-Haqq Tour</p>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="dropdown mega-dropdown">
                                      <a href="<?php echo base_url();?>index.php/tentangKami" class="dropdown-toggle" data-toggle="dropdown">Beranda <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                                      <ul class="dropdown-menu mega-dropdown-menu row">
                                        <li class="col-sm-3">
                                          <ul>
                                            <li class="dropdown-header">Galery El-Haqq</li>
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">

                                                <div class="item active">
                                                  <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                                </div>
                                                <!-- End Item -->
                                                <?php foreach ($galeri->result() as $key): ?>
                                                <div class="item">
                                                  <a href="#"><img src="<?php echo base_url() . './images/'.$key->gambar  ?>" class="img-responsive" alt="product 2"></a>
                                                </div>
                                                <?php endforeach ?> 
                                                <!-- End Item -->
                                              </div>
                                              <!-- End Carousel Inner -->
                                            </div>
                                            <!-- /.carousel -->
                                            <li class="divider"></li>
                                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                                          </ul>
                                        </li>
                                        <li class="col-sm-3">
                                          <ul>
                                            <li class="dropdown-header">Dresses</li>
                                            <li><a href="#">Unique Features</a></li>
                                            <li><a href="#">Image Responsive</a></li>
                                            <li><a href="#">Auto Carousel</a></li>
                                            <li><a href="#">Newsletter Form</a></li>
                                            <li><a href="#">Four columns</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Tops</li>
                                            <li><a href="#">Good Typography</a></li>
                                          </ul>
                                        </li>
                                        <li class="col-sm-3">
                                          <ul>
                                            <li class="dropdown-header">Jackets</li>
                                            <li><a href="#">Easy to customize</a></li>
                                            <li><a href="#">Glyphicons</a></li>
                                            <li><a href="#">Pull Right Elements</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Pants</li>
                                            <li><a href="#">Coloured Headers</a></li>
                                            <li><a href="#">Primary Buttons & Default</a></li>
                                            <li><a href="#">Calls to action</a></li>
                                          </ul>
                                        </li>
                                        <li class="col-sm-3">
                                          <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a href="#">Default Navbar</a></li>
                                            <li><a href="#">Lovely Fonts</a></li>
                                            <li><a href="#">Responsive Dropdown </a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Newsletter</li>
                                            <form class="form" role="form">
                                              <div class="form-group">
                                                <label class="sr-only" for="email">Email address</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                                              </div>
                                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </form>
                                          </ul>
                                        </li>
                                      </ul>

                                    </li>
                                    <li><a href="<?php echo base_url();?>index.php/tentangKami">Tentang Kami</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Layanan">Layanan</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Jadwal">Jadwal</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Galeri">Galeri</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Testimoni">Testimoni</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Download">Download</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/KontakKami">Kontak Kami </a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->


        <!--Start of slider section-->
        <section id="slider" >
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="<?php echo base_url();?>assets/img/img4.jpg" style="width:100%; height: 500px;"alt="...">
                        </div>
                    </div>
                    <!--End of item With Active-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="<?php echo base_url();?>assets/img/img2.jpg"style="width:100%; height: 500px;" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Haji Plus </h3>
                                    <h2>Nikmat Nya Haji Bersama Elhaqq Tours & Travel</h2>
                                    <p>Haji Plus Bersama Elhaqq Tour Lebih Dari Sekedar Nikmatnya Beribadah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of Item-->
                    <div class="item">
                        <div class="slider_overlay">
                            <img src="<?php echo base_url();?>assets/img/1.jpg" style="width:100%; height: 500px;"alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>Protect</h3>
                                    <h2>nature the environment</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
                <!-- Left and right controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
        </section>
        <!--end of slider section-->


        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>Selamat Datang di El-Haqq Tour & Travel</h2>
                            <p>Mengapa harus di El-Haaq Tour & Travel?</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <img class="tengah" src="<?php echo base_url();?>assets/img/i1.png">
                                    </div>
                                     <h4>Proses Mudah</h4>
                                    <p>Pelayanan yang cepat dan profesional, memudahkan Anda berangkat ke tanah suci.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <img class="tengah" src="<?php echo base_url();?>assets/img/i2.png">
                                    </div>
                                    <h4>Pembimbing Terpercaya</h4>
                                    <p>Komitmen kami untuk melayani sepenuh hati, agar ibadah Anda nyaman dan khusuk.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                         <img class="tengah" src="<?php echo base_url();?>assets/img/i4.png">
                                    </div>
                                     <h4>Fasilitas berkualitas</h4>
                                    <p>Menyediakan fasilitas hotel terbaik dekat dengan Masjidil Haram &amp; Masjid Nabawi, Penerbangan Standar IATA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                       <img class="tengah" src="<?php echo base_url();?>assets/img/i3.png">
                                    </div>
                                    <h4>Terdaftar Resmi</h4>
                                    <p>Resmi Terdaftar di Kementrian Agama Republik Indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->

       
        <!--Start of volunteer-->
        <section id="volunteer">
            <div class="container" style=" background: #000000;">
                <div class="row vol_area">
                    <div class="col-md-8">
                        <div class="volunteer_content">
                            <h3>Daftarkan diri <br><span>El-Haqq Tour & Travel</span></h3>
                            <p>Bergabung bersama kami menjalankan ibadah Haji dan Umrah, InsyaAllah Berkah.</p>
                        </div>
                    </div>
                    <!--End of col-md-8-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join_us">
                            <a href="" class="vol_cust_btn">Lihat layanan</a>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                </div>
                <!--End of row and vol_area-->
            </div>
            <!--End of container-->
        </section>
        <!--end of volunteer-->


        <!--Start of berita-->
        <section id="blog">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>Berita Terkini</h2>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="container" style="background-color:#f1f1f1; width:100%; overflow:hidden; margin: auto;">
                  <div class="row">
                        <!-- Berita -->
                        <div class="leftcolumn" >
                            <?php foreach ($berita->result() as $key) { ?>
                            <div class="card" style="margin:20px;">
                            <div class="blog_news">
                                    <div class="single_blog_item">
                                        <div class="blog_img">
                                            <a target="_blank" href="<?php echo base_url() . './images/berita/'.$key->gambar  ?>"> 
                                              <img class="card-img-top"src="<?php echo base_url() . './images/berita/'.$key->gambar  ?>" width="60%" height="60%">
                                            </a>
                                        </div>
                                        <div class="blog_content">
                                            <a href=""><h3><?php echo $key->judul;?></h3></a>
                                            <div class="expert">
                                                <div class="left-side text-left">
                                                    <p class="left_side">
                                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                        <span class="time"><?php echo date('d F Y', strtotime($key->posted)); ?></span>
                                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                                    </p>
                                                    
                                                </div>
                                            </div>

                                            <p class="blog_news_content" >
                                                <?php $isi=$key->berita;
                                                   $cut=substr($isi, 0,500);
                                                   echo $cut;
                                                ?>
                                            </p>
                                             <br>
                                             <br>
                                            <a href="<?php echo base_url().'index.php/beranda/tampil/'.$key->id; ?>" class="blog_link">read more</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                            <?php } ?>
                        </div>

                        <!-- Side Bar -->
                        <div class="rightcolumn">
                              <!-- AGenda Acara-->
                              <div class="card" style="margin:;">
                                <h3>Agenda Kegiatan</h3>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th style="text-align:"></th>
                                      <th style="text-align:"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach ($agenda->result() as $key) { ?>
                                            <tr class="odd gradeX">
                                              <td style="text-align: left"><?php echo date('d F Y', strtotime($key->tanggal)); ?></td>
                                              <td style="text-align: left"><?php echo $key->acara; ?></td>
                                            </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>

                              <!--Galeri-->
                              <div class="card" style="margin:;">
                                <h3>Galeri</h3>
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                             <center>
                                              <div class="carousel-inner">

                                                <div class="item active">
                                                  <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" width="250px" height="150px" style="margin-top:5px" alt="product 1"></a>
                                                </div>
                                                <!-- End Item -->
                                                <?php foreach ($galeri->result() as $key): ?>
                                                <div class="item">
                                                  <a href="#"><img src="<?php echo base_url() . './images/'.$key->gambar  ?>" width="250px" height="150px" style="margin-top:5px" alt="product 2"></a>
                                                </div>
                                                <?php endforeach ?> 
                                                <!-- End Item -->
                                              </div>
                                              <br>
                                              <a href="#">Lihat Galeri <span class="glyphicon glyphicon-chevron-right "></span></a>
                                              </center>
                                              <!-- End Carousel Inner -->
                                    </div>

                              </div>

                              <!--Fungsi Menampilkan Video-->
                                <?php 
                                function youtube($url){
                                  $link=str_replace('http://www.youtube.com/watch?v=', '', $url);
                                  $link=str_replace('https://www.youtube.com/watch?v=', '', $link);
                                  $data='<object width="250px" height="auto" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
                                  <param name="src" value="http://www.youtube.com/v/'.$link.'" />
                                  </object>';
                                  return $data;
                                }
                                ?>      
                              <!-- Video -->
                              <div  id="Video" class="card" style="margin:px;">
                                <h3>Video</h3>
                                  <?php foreach ($video as $key): ?>
                                  <center>
                                    <?php echo youtube("$key->link") ?>
                                  </center>
                                 <?php endforeach ?>
                              </div>
                        </div>
                  </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!-- end of berita-->

        <!--Stast Video Kontent
        <section class="post-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-video-area bg-white mb-30 box-shadow" style="margin-bottom:50px;">

                            <iframe src="https://www.youtube.com/embed/J_x3-pgV-Ko" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        End Video Kontent-->

        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>Kontak Kami</h3>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Komp. Yayasan Islam Anwarul Jam’iyyah Jl.Terusan No 77 Cabangdua RT 001/007 Lenggahsari Cabangbungin Bekasi</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+62 812 1855 9644</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span> info@elhaqqtour.com/span></i>
                                </div>
                               
                            </div>
                        </div>
                        <div class="office">
                            <div class="title">
                                <h5>Follow Us</h5>
                            </div>
                            <div class="office_location">
                                <div class="social_icon text-left">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Temukan Kami</h5>
                            </div>
                         
                            <div class="form_area">
                                    <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->

        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>@ 2018 - Design By El-Haqq Tour & Travel <span><a href="">&#9798;</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                            <p>A Design By <a href="#">El-Haqq-Tour & Travel</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->


        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="<?php echo base_url();?>assets/js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="<?php echo base_url();?>assets/js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="<?php echo base_url();?>assets/js/isotope/min/scripts-min.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope/cells-by-row.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="<?php echo base_url();?>assets/js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="<?php echo base_url();?>assets/js/jquery.localScroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    </body>

</html>