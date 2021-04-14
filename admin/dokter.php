<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN DOKTER</title>
	<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
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




<?php include 'menu.php';
// --- koneksi ke database
$koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());

$table = "tb_dokter";?>
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

// --- Fungsi tambah data (Create) / Input DOKTER Baru
function tambah($koneksi){
//DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE
	if (isset($_POST['btn_simpan']))
	{

		$id_dokter 				= $_POST['id_dokter'];
		$nama_dokter 			= $_POST['nama_dokter'];
		$spesialis 				= $_POST['spesialis'];
		$alamat					= $_POST['alamat'];
		$no_telp				= $_POST['no_telp'];
			
		
		if(!empty($id_dokter) && !empty($nama_dokter) && !empty($spesialis) && !empty($alamat) && !empty($no_telp))
		{
			$sql = "INSERT INTO tb_dokter (id_dokter, nama_dokter, spesialis, alamat, no_telp) 
			        VALUES('".$id_dokter."','".$nama_dokter."','".$spesialis."', '".$alamat."','".$no_telp."')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi']))
			{
				if($_GET['aksi'] == 'create')
				{
					header('location:dokter.php');
				}
			}
		} else 
		{
			$pesan = "Tidak dapat menyimpan, data belum lengkap!";
		}
	}

	?> 
<nav class="navbar" id="mainNav">

<form action="" method="POST"  >
	 <div class="container">
      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ISI DATA DOKTER</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>



      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->
       			<fieldset>
       			<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>ID Dokter</label>
		                <input class="form-control" id="id_dokter" name="id_dokter" type="text" placeholder="ID Dokter" required="required" data-validation-required-message="Silahkan Masukkan ID Dokter">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>		

            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama Dokter</label>
		                <input class="form-control" id="nama_dokter" name="nama_dokter" type="text" placeholder="Nama Dokter" required="required" data-validation-required-message="Silahkan Masukkan Nama Dokter">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>

            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Spesialis</label>
	                <input class="form-control" id="spesialis" type="text" name="spesialis" placeholder="Spesialis" required="required" data-validation-required-message="Silahkan Masukkan Spesialis Keahlian Dokter">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Alamat</label>
	                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat Dokter" required="required" data-validation-required-message="Silahkan Masukkan Alamat Dokter">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Nomor Telepon Dokter</label>
	                <input class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon Dokter" required="required" data-validation-required-message="Silahkan Masukkan Nomor Telepon Dokter">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
				</div>
            	</div>

            <br>    
                  
				<div id="success"></div>
	            	<div class="control-group">
	            		<div class="form-group floating-label-form-group controls mb-0 pb-2" align=center>
			            	<button type="submit" name="btn_simpan" button class="btn btn-primary btn-info" id="sendMessageButton"/>SIMPAN</button>
							<button type="reset"  name="reset" button class="btn btn-primary btn-warning" />BERSIHKAN</button>
	            		</div>
	            	</div>
				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
	        </fieldset>
          </form>
              </nav>	 
		</div>
	 </div>
	</div>
<?php
}
// --- Tutup Fungsi tambah data

// --- Fungsi Baca Data (Read)

function tampil_data($koneksi){
	//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->
	$sql = "SELECT * FROM tb_dokter";
	$query = mysqli_query($koneksi, $sql);

	
	echo "<fieldset>";
	echo "<h2 class=page-section-heading text-center text-uppercase text-secondary mb-0 align=center>TAMPIL DATA DOKTER</h2>";
	echo "
      <div class='divider-custom'>
        <div class='divider-custom-line'></div>
        <div class='divider-custom-icon'>
          <i class='fas fa-star'></i>
        </div>
        <div class='divider-custom-line'></div>
      </div>";
	echo "<table class='table table-striped table-bordered container' id='yuk' style='width:100%'>";
	?>
	<thead>
	<?php
	echo "

		  <tr>
			<th>ID Dokter</th>
			<th>Nama Dokter</th>
			<th>Spesialis</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
			<th>Pilihan</th>
		  </tr>";
		  ?>
	</thead>	
	<tbody>
<?php
	while($data = mysqli_fetch_array($query)){
		?>
		
			<tr align=justify>
				<td><?php echo $data['id_dokter']; ?>		</td>
				<td><?php echo $data['nama_dokter']; ?>		</td>
				<td><?php echo $data['spesialis']; ?>			</td>
				<td><?php echo $data['alamat']; ?>		</td>
				<td><?php echo $data['no_telp']; ?>	</td>
				<td>

						<a href="dokter.php?aksi=update&id_dokter=<?php echo $data['id_dokter']; ?>
						&nama_dokter=		<?php echo $data['nama_dokter']; ?>
						&spesialis=			<?php echo $data['spesialis']; ?>
						&alamat=			<?php echo $data['alamat']; ?>
						&no_telp=			<?php echo $data['no_telp']; ?>"
						
					<button class="btn btn-success" title="EDIT">
					<i class="icon-large icon-edit"></a></i></button>
					<a href="dokter.php?aksi=delete&id_dokter=<?php echo $data['id_dokter']; ?>"
					<button class="btn btn-danger" title="HAPUS" >
					<i class="icon-large icon-remove"></a></i></button>
									
				</td>
		
<script type="text/javascript">
             $(document).ready(function()
             {
                $('#yuk').DataTable();
             });
</script>	

		<?php
		
	}
	
	echo "</tbody></table>";
	echo "</fieldset>";
}
// --- Tutup Fungsi Baca Data (Read)
// --- Fungsi Ubah Data (Update)
function ubah($koneksi){
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->
	// ubah data
	if(isset($_POST['btn_ubah'])){

		$id_dokter 				= $_POST['id_dokter'];
		$nama_dokter 			= $_POST['nama_dokter'];
		$spesialis 				= $_POST['spesialis'];
		$alamat					= $_POST['alamat'];
		$no_telp				= $_POST['no_telp'];
		
		if(!empty($nama_dokter) && !empty($spesialis) && !empty($alamat) && !empty($no_telp)){
			$perubahan="nama_dokter='".$nama_dokter."',spesialis='".$spesialis."',alamat='".$alamat."',no_telp='".$no_telp."'";
			$sql_update = "UPDATE tb_dokter SET ".$perubahan." WHERE id_dokter=$id_dokter";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					header('location:dokter.php');
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	


	// TAMPILAN UNTUK FORM UBAH / FORM UNTUK UPDATE TABLE
	if(isset($_GET['id_dokter'])){
		?>
			<button class="btn btn-success"><a href="dokter.php">Home</a> </button> 				<!-- LINK KE HALAMAN HOME / INDEX -->
			<button class="btn btn-info"><a href="dokter.php?aksi=create">Tambah Data</a></button> 	<!-- JIKA INGIN TAMBAH DOKTER -->
			<hr>
			 <nav class="navbar" id="mainNav">
			<form action="" method="POST" >
 <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EDIT DATA DOKTER</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->       		
       			<fieldset>
       			<input type="hidden" name="id_dokter" value="<?php echo $_GET['id_dokter'] ?>"/>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama Dokter</label>
		                <input class="form-control" id="nama_dokter" name="nama_dokter" type="text" placeholder="Name Dokter" required="required" data-validation-required-message="Silahkan Masukkan Nama Dokter" value="<?php echo $_GET['nama_dokter'] ?>">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>

            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Spesialis</label>
	                <input class="form-control" id="spesialis" type="text" name="spesialis" placeholder="Spesialis" required="required" data-validation-required-message="Silahkan Masukkan Spesialis Keahlian Dokter" value="<?php echo $_GET['spesialis']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Alamat</label>
	                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat Dokter" required="required" data-validation-required-message="Silahkan Masukkan Alamat Dokter" value="<?php echo $_GET['alamat']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Nomor Telepon Dokter</label>
	                <input class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon Dokter" required="required" data-validation-required-message="Silahkan Masukkan Nomor Telepon Dokter" value="<?php echo $_GET['no_telp']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
				</div>
            	</div>

            <br>    
                  


				<div id="success"></div>
	            	<div class="control-group">
	            		<div class="form-group floating-label-form-group controls mb-0 pb-2" align=center>
			            	<button type="submit" name="btn_ubah" button class="btn btn-primary btn-info" id="sendMessageButton"/>EDIT</button>
							<button name="reset" button class="btn btn-primary btn-danger" /><a href="dokter.php?aksi=delete&id_dokter=<?php echo $_GET['id_dokter'] ?>"> (x) Hapus data ini !</a></button>
	            		
	            		</div>
	            	</div>
				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
	        </fieldset>
          </form>
           </nav>	 
		</div>
	 </div>
	</div>
	
		<?php
	}
	
}


// --- Tutup Fungsi Update


// --- Fungsi Delete
function hapus($koneksi){
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE POLIKLINIK/DIGANTI MENYESUIKAN DATA TABLE       		-->
	if(isset($_GET['id_dokter']) && isset($_GET['aksi'])){
		$id_dokter 		= $_GET['id_dokter'];
		$sql_hapus 	= "DELETE FROM tb_dokter WHERE id_dokter=" . $id_dokter;
		$hapus 		= mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				header('location: dokter.php');
			}
		}
	}
	
}
// --- Tutup Fungsi Hapus
// ===================================================================

// --- Program Utama
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "create":				//MENJALANKAN FUNGSI INPUT TABLE
			echo"<button class='btn btn-success'><a href='dokter.php'>Home</a> </button> ";
			tambah($koneksi);
			break;
		case "read":				//MENJALANKAN FUNGSI VIEW/TAMPIL TABLE
			tampil_data($koneksi);
			break;
		case "update":				//MENJALANKAN FUNGSI UPDATE TABLE
			ubah($koneksi);
			tampil_data($koneksi);
			break;
		case "delete":				//MENJALANKAN FUNGSI HAPUS TABLE
			hapus($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidak ada!</h3>";
			tambah($koneksi);
			tampil_data($koneksi);
	}
} else {
	tambah($koneksi);
	tampil_data($koneksi);
}

?>
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
