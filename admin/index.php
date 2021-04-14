<!doctype html>
<html lang="en">

<body data-spy="scroll" data-target="#navbar-example">
<div id="preloader"></div>
<?php
include 'header.php';
?>

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="../img/slider/slider-11.jpg" alt="" title="#slider-direction-1" />
        <img src="../img/slider/slider-22.jpg" alt="" title="#slider-direction-2" />
        <img src="../img/slider/slider-33.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Selamat Datang Di Apotek & Klinik Pratama Harapan Bersama</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="rekammedis.php">JUMLAH PENDAFTAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tgl     = date('Y-m-d'); 
                    $sqlRM   = "SELECT * FROM tb_rekammedis WHERE tgl_periksa='$tgl'";
                    $queryRM = mysqli_query($koneksi,$sqlRM);
                    $hitung  = mysqli_num_rows($queryRM);
                    echo $hitung;
                    ?></a>
                  <a class="ready-btn page-scroll" href="rekamobat.php">
                    JUMLAH FAKTUR OBAT KELUAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tglku     = date('Y-m-d'); 
                    $sqlku   = "SELECT * FROM tb_rekammedis WHERE tgl_periksa = '$tglku'";
                    $queryku = mysqli_query($koneksi,$sqlku);
                    $hitungku= mysqli_num_rows($queryku);
                    echo $hitungku;
                    
                    ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"></h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="rekammedis.php">JUMLAH PENDAFTAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tgl     = date('Y-m-d'); 
                    $sqlRM   = "SELECT * FROM tb_rekammedis WHERE tgl_periksa='$tgl'";
                    $queryRM = mysqli_query($koneksi,$sqlRM);
                    $hitung  = mysqli_num_rows($queryRM);
                    echo $hitung;
                    ?></a>
                  <a class="ready-btn page-scroll" href="rekamobat.php">
                    JUMLAH FAKTUR OBAT KELUAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tglku     = date('Y-m-d'); 
                    $sqlku   = "SELECT * FROM tb_rm_obat WHERE tgl_periksa = '$tglku'";
                    $queryku = mysqli_query($koneksi,$sqlku);
                    $hitungku= mysqli_num_rows($queryku);
                    echo $hitungku;
                    
                    ?>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Jl. Mataram No.9 Kelurahan Pesurungan Lor Kec. Margadana Kota Tegal</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Kampus 1 Politeknik Harapan Bersama Kota Tegal</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="rekammedis.php">JUMLAH PENDAFTAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tgl     = date('Y-m-d'); 
                    $sqlRM   = "SELECT * FROM tb_rekammedis WHERE tgl_periksa='$tgl'";
                    $queryRM = mysqli_query($koneksi,$sqlRM);
                    $hitung  = mysqli_num_rows($queryRM);
                    echo $hitung;
                    ?></a>
                  <a class="ready-btn page-scroll" href="rekamobat.php">
                    JUMLAH FAKTUR OBAT KELUAR HARI INI ADALAH : <?php 
                    $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
                    $tglku     = date('Y-m-d'); 
                    $sqlku   = "SELECT * FROM tb_rm_obat WHERE tgl_periksa = '$tglku'";
                    $queryku = mysqli_query($koneksi,$sqlku);
                    $hitungku= mysqli_num_rows($queryku);
                    echo $hitungku;
                    
                    ?>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>APOTEK & KLINIK PRATAMA HARAPAN BERSAMA</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="../img/about/c.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="../img/about/d.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Pelayanan</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="pasien.php">
                      <i class="fa fa-bar-chart"></i>

                    </a>
                  <h4>Data Pasien</h4>
                  <p>
                    Pendaftaran, Pencarian, Rekap Data Pasien
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="dokter.php">
                      <i class="fa fa-user"></i>
                    </a>
                  <h4>Dokter</h4>
                  <p>
                    Data Dokter
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="poliklinik.php">
                      <i class="fa fa-home"></i>
                    </a>
                  <h4>Poliklinik</h4>
                  <p>
                    Pendataan Poliklinik
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="rekammedis.php">
                      <i class="fa fa-calendar"></i>
                    </a>
                  <h4>Rekam Medis </h4>
                  <p>
                    Halaman Rekam Medis
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="obat.php">
                      <i class="fa fa-leaf"></i>
                    </a>
                  <h4>Obat</h4>
                  <p>
                    Data Obat
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <!--<div class="col-md-4 col-sm-4 col-xs-12">
            end col-md-4  
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="rekamobat.php">
                      <i class="fa fa-book"></i>
                    </a>
                  <h4>Rekam Obat</h4>
                  <p>
                    Data Rekam Obat Pasien
                  </p>
                </div>
              </div> -->
              <!--end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
      <div class="container">
        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
              <div class="single-skill">
                <div class="progress-circular">
          <?php 
          $koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());
          $table = "tb_pasien";
          
          $sql1 = "SELECT * FROM $table"; 
          $sql2 = "SELECT * FROM $table WHERE jk='Laki-Laki'";
          $query1 = mysqli_query($koneksi,$sql1);
          $query2 = mysqli_query($koneksi,$sql2);
          $count1 = mysqli_num_rows($query1);
          $count2 = mysqli_num_rows($query2);
          $yu    =($count2/$count1)*100 ?> 
                  <input type="text" class="knob" value="0" data-rel="<?php echo "$yu"; ?>" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="red" data-thickness=".30" data-readonly="true" disabled>
                  <h3 class="progress-h4">Prosentase Pasien Laki-Laki</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start -->
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
              <div class="single-skill">
                <div class="progress-circular">
          <?php
          $sql11 = "SELECT * FROM $table"; 
          $sql22 = "SELECT * FROM $table WHERE jk='Perempuan'";
          $query11 = mysqli_query($koneksi,$sql11);
          $query22 = mysqli_query($koneksi,$sql22);
          $count11 = mysqli_num_rows($query11);
          $count22 = mysqli_num_rows($query22);
          $yu2    =($count22/$count11)*100 ?>
          
          
                  <input type="text" class="knob" value="0" data-rel="<?php echo "$yu2"; ?>" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="Yellow" data-thickness=".30" data-readonly="true" disabled>
                  <h3 class="progress-h4">Prosentase Pasien Perempuan</h3>
                </div>
              </div>
            </div>
            <!-- single-skill end -->
            <!-- single-skill start
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".30" data-readonly="true" disabled>
                  <h3 class="progress-h4">Java Script</h3>
                </div>
              </div>
            </div>
            single-skill end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->

 

 

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Tim Medis</h2>
          </div>
        </div>
      </div>
    
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/b.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Dr.Inka Roekmiasri</h4>
                <p>Dokter Umum</p>
              </div>
            </div>
          </div>
          <!-- End column -->

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/c.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                 <h4>Farida Oktavia,S.Farm.,Apt</h4>
                <p>Apoteker</p>
              </div>
            </div>
          </div>
          <!-- End column -->

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/d.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                  <h4>Dr. Ike Fitrika Merlianda</h4>
                <p>Dokter Umum</p>
              </div>
            </div>
          </div>
          <!-- End column -->
 
         
        
            <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/g.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                  <h4>Joko Purwanto</h4>
                <p>Perawat</p>
              </div>
            </div>
          </div>
          <!-- End column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/h.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                  <h4>Ulfatun Latifah</h4>
                <p>Bidan</p>
              </div>
            </div>
          </div>
          <!-- End column -->
           
              <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/f.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                  <h4>Novia Ludha Arisanti</h4>
                <p>Bidan</p>
              </div>
            </div>
          </div>
          <!-- End column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                    <img src="../img/team/e.jpg" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                  <h4>Tias Dwi Arti</h4>
                <p>Bidan </p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
   
  <!-- End Team Area -->


  

  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Gallery</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Tim Kesehatan</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Kunjungan</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Peresmian</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/a.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/a.jpg">
                      <h4>Dinas Kesehatan</h4>
                      <span>Kunjungan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/b.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/b.jpg">
                      <h4>Pembukaan Klinik</h4>
                      <span>Peresmian</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/c.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/c.jpg">
                      <h4>Tumpengan</h4>
                      <span>Peresmian</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/d.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/d.jpg">
                      <h4>Survei Ruangan</h4>
                      <span>Kunjungan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/e.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/e.jpg">
                      <h4>Pembukaan Klinik</h4>
                      <span>Tim Kesehatan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="../img/portfolio/f.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="../img/portfolio/f.jpg">
                     <h4>Potong Pita</h4>
                      <span>Kunjungan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
  
  
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Hubungi Kami</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  No Telp 0283-350271<br>
                  <span>Buka Senin-Sabtu (08.00-20.00 WIB)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: klinik.pratama@poltektegal.ac.id<br>
                  <span>Web: www.poltektegal.ac.id</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Lokasi: Kampus 1 Politeknik Jl. Mataram No.9 Kelurahan Pesurungan Lor<br>
                  <span>Kec. Margadana Kota Tegal</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1836995597246!2d109.10501771477271!3d-6.8685785950364835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9e2805c1c1b%3A0xe3e61e1ae59106ff!2sPoliteknik%20Harapan%20Bersama!5e0!3m2!1sid!2sid!4v1591114435916!5m2!1sid!2sid" width="1150" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" align="text-center"></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Rekam Medis</span>Klinik Pratama</h2>
                </div>

                <p>Melayani setiap anggota keluarga</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Informasi</h4>
                <p>
                  Hubungi No ini jika anda membutuhkan pelayanan medis
                </p>
                <div class="footer-contacts">
                  <p><span>No Telp:</span> 0283-350271</p>
                  <p><span>Email:</span> klinik.pratama@poltektegal.ac.id</p>
                  <p><span>Jam Buka Klinik:</span> 08.00 - 20.00 WIB</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Gallery</h4>
                <div class="flicker-img">
                  <a href="#"><img src="../img/portfolio/a.jpg" alt=""></a>
                  <a href="#"><img src="../img/portfolio/b.jpg" alt=""></a>
                  <a href="#"><img src="../img/portfolio/c.jpg" alt=""></a>
                  <a href="#"><img src="../img/portfolio/d.jpg" alt=""></a>
                  <a href="#"><img src="../img/portfolio/e.jpg" alt=""></a>
                  <a href="#"><img src="../img/portfolio/f.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>RM PRATAMA HB</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="#">Mohamad Fahmi 2020</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <script src="lib/js/main.js"></script>
</body>

</html>
