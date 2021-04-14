<!DOCTYPE html>
<html>
<head>
	<title>CETAK REKAM MEDIS ID RM PASIEN : 
  <?php $ambil   = $_GET['tp'];
  echo $ambil ?></title>
	<!-- DATA TABLES -->
	<link  	rel="stylesheet" type="text/css" href="lib/css/csstables/dataTables.bootstrap4.min.css" >
	<link 	rel="stylesheet" type="text/css" href="lib/css/csstables/bootstrap.css" >
	<script type="text/javascript" src="lib/js/jstables/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="lib/js/jstables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="lib/js/jstables/dataTables.bootstrap4.min.js"></script>
	<!-- END -->	
	<!-- UNTUK FUNGSI BOX WARNA-->
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<!-- END -->	
	<!-- FORMULIR -->
	 <link href="lib/css/freelancer.min.css" rel="stylesheet">
	 <link href="lib/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	 <!--END-->
	<!-- DARI SHORTCODES 
	<link href="lib/css/bootstrap.min.css" rel="stylesheet">-->
	<!-- Favicons -->
  	<link href="img/favicon.png" rel="icon">
  	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  	<!-- Bootstrap CSS File -->
  	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Libraries CSS Files -->
  	<link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  	<link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  	<link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<link href="lib/animate/animate.min.css" rel="stylesheet">
 	 <link href="lib/venobox/venobox.css" rel="stylesheet">
  	<!-- Nivo Slider Theme 
  	<link href="css/nivo-slider-theme.css" rel="stylesheet">-->
  	<!-- Main Stylesheet File / CSS ATUR TABLE --> 
  	<link href="lib/css/style.css" rel="stylesheet">
 	 <!-- Responsive Stylesheet File -->
 	 <link href="lib/css/responsive.css" rel="stylesheet">
 	 <!-- FONT AWESOME  / ICON MENARIK-->
 	 <link href="lib/css/font-awesome.css" rel="stylesheet">
</head>
<body id="page-top">



<?php
include"config.php";
$table = "tb_rekammedis";?>
<!--
    <section class="content">
     
      <div class="row">
        <div class="col-lg-3 col-xs-6"> 
        
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
					<?php $sql/* = "SELECT * FROM $table WHERE jk='perempuan'";
					$query = mysqli_query($koneksi,$sql);
					$count = mysqli_num_rows($query);
					echo "$count";
					*/
 					?></h3>
              <p>JUMLAH DOKTER PEREMPUAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        -->
<!--     
     
      <div class="row">
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
					<?php $sql /* = "SELECT * FROM $table WHERE jk='laki-laki'";
					$query = mysqli_query($koneksi,$sql);
					$count = mysqli_num_rows($query);
					echo "$count";*/
					?></h3>
              <p>JUMLAH DOKTER LAKI-LAKI</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> </div></section> 
-->

<?php

// --- Fungsi Baca Data (Read)

	//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->
	
	$ambil 	= $_GET['tp'];
	//$sql 	= "SELECT * FROM tb_rekammedis WHERE id_rm = $ambil";

    $sql= "SELECT * FROM tb_rekammedis INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter 
    INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
    INNER JOIN tb_poliklinik ON tb_rekammedis.id_poliklinik = tb_poliklinik.id_poliklinik
    WHERE id_rm = $ambil";


	$query 	= mysqli_query($koneksi, $sql);
	while($data = mysqli_fetch_array($query)){
		?>
		<!-- start pricing area -->
  <div id="pricing" class="pricing-area area-padding" align="center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-1 col-xs-12">
          <div class="section-headline text-center">

            <h2>DATA REKAM MEDIS PASIEN</h2>
          </div>
        </div>
      </div>
      <div class="row">

    <div class="col-md-2 col-sm-6 col-xs-4">
    </div>

        <div class="col-md-8 col-sm-6 col-xs-4">
          <div class="pri_table_list active">
            <span class="saleon">RM PASIEN</span>
            <h3>REKAM MEDIS<br/> KLINIK HARAPAN BERSAMA KOTA TEGAL <br/> <span><?php echo "ID RM : ". $data['id_rm']; ?></span></h3>
            <ol>
              <li class="check">ID PASIEN &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; : &nbsp;<?php echo $data['id_pasien']; ?></li>
              <li class="check">NO ID PASIEN &nbsp;&nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $data['nomor_identitas']; ?></li>
              <li class="check">NAMA PASIEN &nbsp;&nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $data['nama']; ?></li>
              <li class="check">JEN KEL PASIEN &nbsp; : &nbsp;<?php echo $data['jk']; ?></li>
              <li class="check">ALAMAT PASIEN &nbsp;&nbsp; : &nbsp;<?php echo $data['alamat']; ?></li>
              <li class="check">NO.TELP PASIEN&nbsp;&nbsp; : &nbsp;<?php echo $data['no_telp']; ?></li>
              <li class="check">KELUHAN PASIEN&nbsp; :&nbsp; <?php echo $data['keluhan']; ?>	</li>
              <li class="check">ID DOKTER &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $data['id_dokter']; ?></li>
              <li class="check">NAMA DOKTER &nbsp;&nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $data['nama_dokter']; ?></li>
              <li class="check">SPESIALIS &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $data['spesialis']; ?></li>
              <li class="check">DIAGNOSA  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; 		<?php echo $data['diagnosa']; ?></li>
              <li class="check">NAMA POLIKLINIK  &nbsp;  :&nbsp;     <?php echo $data['nama_poliklinik']; ?></li>
              <li class="check">GEDUNG  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; :&nbsp; <?php echo $data['gedung']; ?></li>
              <li class="check">TANGGAL PERIKSA&nbsp;:&nbsp;<?php echo $data['tgl_periksa']; ?>	</li>

              <!--<li class="check cross">Cash back</li>-->
           



            </ol>
            <button><a href="rekammedis.php">KEMBALI</button></a>
          </div>
        </div>
        </div>
    </div>
  </div>

		
<?php
		
	}
	
	echo "</tbody></table>";
	echo "</fieldset>";

?>
            
<script type="text/javascript">
  window.print();

</script>



<!-- MULAI DISINI -->

<!-- FORMILIR Bootstrap core JavaScript--> 
 <!-- MATIKAN INI UNTUK DATATABLENYA SUPAYA JALAN
  <script src="vendor/jquery/jquery.min.js"></script>-->
  <!--UNTUK PLACEHOLDER -->
  <script src="lib/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="lib/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="lib/js/jqBootstrapValidation.js"></script>
  <script src="lib/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="lib/js/freelancer.min.js"></script>
<!-- BATAS FORMULIR -->

</body>
</html>
