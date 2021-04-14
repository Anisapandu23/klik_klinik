<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN OBAT</title>
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
include"config.php";
$table = "tb_obat";?>

<?php

// --- Fungsi tambah data (Create) / Input OBAT Baru
function tambah($koneksi){
//DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE
	if (isset($_POST['btn_simpan']))
	{

		$id_obat					= time();
		$nama_obat 					= $_POST['nama_obat'];
		$keterangan_obat			= $_POST['keterangan_obat'];
		$stok						= $_POST['stok'];
		$exp						= $_POST['exp'];
		
		
		if(!empty($nama_obat) && !empty($keterangan_obat)&& !empty($stok)&& !empty($exp))
		{
			$sql = "INSERT INTO tb_obat (id_obat, nama_obat, keterangan_obat, stok, exp) 
			        VALUES(".$id_obat.",'".$nama_obat."','".$keterangan_obat."','".$stok."','".$exp."')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi']))
			{
				if($_GET['aksi'] == 'create')
				{
					header('location:obat.php');
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
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ISI DATA OBAT</h2>

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
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE Poli/DIGANTI MENYESUIKAN DATA TABLE       		-->
       			<fieldset>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama Obat</label>
		                <input class="form-control" id="nama_obat" name="nama_obat" type="text" placeholder="Nama Obat" required="required" data-validation-required-message="Silahkan Masukkan Nama Obat">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Keterangan Obat</label>
	                <input class="form-control" id="keterangan_obat" type="text" name="keterangan_obat" placeholder="Keterangan Obat" required="required" data-validation-required-message="Silahkan Masukkan Keterangan Obat">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>

	            <!-- stok obat -->
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Jumlah Stok Obat</label>
	                <input class="form-control" id="stok" type="text" name="stok" placeholder="Jumlah Stok Obat" required="required" data-validation-required-message="Silahkan Masukkan Jumlah Stok Obat">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <!-- stok obat -->
	               <!-- expired -->
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Tanggal Expired Obat</label>
	                <input class="form-control" id="exp" type="date" name="exp" placeholder="Tanggal Expired Obat" required="required" data-validation-required-message="Silahkan Masukkan Tanggal Expired Obat"> 
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	                <!-- expired -->
	           
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
	//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->
	$sql = "SELECT * FROM tb_obat LIMIT 1,2000";
	$query = mysqli_query($koneksi, $sql);

	
	echo "<fieldset>";
	echo "<h2 class=page-section-heading text-center text-uppercase text-secondary mb-0 align=center>TAMPIL DATA OBAT</h2>";
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
			<th>ID obat</th>
			<th>Nama Obat</th>
			<th>Keterangan Obat</th>
			<th>Jumlah Stok Obat</th>
			<th>Tanggal Expired</th>
			
			<th>Pilihan</th>
		  </tr>";
		  ?>
	</thead>	
	<tbody>
<?php
	while($data = mysqli_fetch_array($query)){
		?>
		
			<tr align=justify>
				<td><?php echo $data['id_obat']; ?>		</td>
				<td><?php echo $data['nama_obat']; ?>		</td>
				<td><?php echo $data['keterangan_obat']; ?>			</td>
				<td><?php echo $data['stok']; ?>			</td>
				<td><?php echo $data['exp']; ?>			</td>
				
				<td>

						<a href="obat.php?aksi=update&id_obat=<?php echo $data['id_obat']; ?>
						&nama_obat			= <?php echo $data['nama_obat']; ?>
						&keterangan_obat	= <?php echo $data['keterangan_obat']; ?>
						&stok				= <?php echo $data['stok']; ?>
						&exp				= <?php echo $data['exp']; ?>"
						
					<button class="btn btn-success">
					<i class="icon-large icon-edit"></a></i></button>
					<a href="obat.php?aksi=delete&id_obat=<?php echo $data['id_obat']; ?>"
					<button class="btn btn-danger" >
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
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->
	// ubah data
	if(isset($_POST['btn_ubah'])){

		$id_obat 			= $_POST['id_obat'];
		$nama_obat 			= $_POST['nama_obat'];
		$keterangan_obat	= $_POST['keterangan_obat'];
		$stok				= $_POST['stok'];
		$exp				= $_POST['exp'];
		


		if(!empty($nama_obat) && !empty($keterangan_obat)){
			$perubahan="nama_obat='".$nama_obat."',keterangan_obat='".$keterangan_obat."',stok='".$stok."',exp='".$exp."'";
			$sql_update = "UPDATE tb_obat SET ".$perubahan." WHERE id_obat=$id_obat";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					header('location:obat.php');
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	


	// TAMPILAN UNTUK FORM UBAH / FORM UNTUK UPDATE TABLE
	if(isset($_GET['id_obat'])){
		?>
			<button class="btn btn-success"><a href="obat.php">Home</a> </button> 				<!-- LINK KE HALAMAN HOME / INDEX -->
			<button class="btn btn-info"><a href="obat.php?aksi=create">Tambah Data</a></button> 	<!-- JIKA INGIN TAMBAH obat -->
			<hr>
			 <nav class="navbar" id="mainNav">
			<form action="" method="POST" >
 <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EDIT DATA OBAT</h2>

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
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->       		
       			<fieldset>
       			<input type="hidden" name="id_obat" value="<?php echo $_GET['id_obat'] ?>"/>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama obat</label>
		                <input class="form-control" id="nama_obat" name="nama_obat" type="text" placeholder="Nama obat" required="required" data-validation-required-message="Silahkan Masukkan Nama obat" value="<?php echo $_GET['nama_obat'] ?>">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Keterangan Obat</label>
	                <input class="form-control" id="keterangan_obat" type="text" name="keterangan_obat" placeholder="Keterangan Obat" required="required" data-validation-required-message="Silahkan Masukkan Keterangan Obat" value="<?php echo $_GET['keterangan_obat']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Stok Obat</label>
	                <input class="form-control" id="stok" type="text" name="stok" placeholder="Jumlah Stok Obat" required="required" data-validation-required-message="Silahkan Masukkan Stok Obat" value="<?php echo $_GET['stok']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	               <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Expired Obat</label>
	                <input class="form-control" id="exp" type="date" name="exp" placeholder="Expired Obat" required="required" data-validation-required-message="Silahkan Masukkan Tanggal Expired Obat" value="<?php echo $_GET['exp']?>" >
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
							<button name="reset" button class="btn btn-primary btn-danger" /><a href="obat.php?aksi=delete&id_obat=<?php echo $_GET['id_obat'] ?>"> (x) Hapus data ini !</a></button>
	            		
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
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->
	if(isset($_GET['id_obat']) && isset($_GET['aksi'])){
		$id_obat 		= $_GET['id_obat'];
		$sql_hapus 	= "DELETE FROM tb_obat WHERE id_obat=" . $id_obat;
		$hapus 		= mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				header('location: obat.php');
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
			echo"<button class='btn btn-success'><a href='obat.php'>Home</a> </button> ";
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
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
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
