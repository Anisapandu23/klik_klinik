<!DOCTYPE html>
<html>
<head>
	<title>REKAM OBAT</title>
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
$table = "tb_rm_obat";?>

<?php

// --- Fungsi tambah data (Create) / Input OBAT Baru
function tambah($koneksi){
//DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE
	if(isset($_POST['btn_simpan']))
	{
		$id 						= time();
		$id_rm						= $_POST['id_rm'];
		$nama_obat					= implode(', ', $_POST['nama_obat']);
		$tgl 	 					= $_POST['tgl_periksa'];	

	if(!empty($id_rm)&&!empty($nama_obat))
		{
			$sql = "INSERT INTO tb_rm_obat (id, id_rm, nama_obat, tgl_periksa) 
			        VALUES(".$id.",'".$id_rm."','".$nama_obat."','".$tgl."')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi']))
			{
				if($_GET['aksi'] == 'create')
				{
					header('location:rekamobat.php');
				}
			}
		} else 
		{
			$pesan = "Tidak dapat menyimpan, data belum lengkap!";
		}
//echo "hello id " . $id . "hello rm  " . $id_rm . " hello id o " . " hello nama o " . $nama_obat;
	}
	

	?> 
<nav class="navbar" id="mainNav">

<form action="" method="POST"  >
	 <div class="container">
      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ISI REKAM DATA OBAT</h2>

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
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="ID Rekam Medis" disabled="disabled">
		                <p class="help-block text-danger"></p>	
            	<div class="control-group">
	              	<select name="id_rm" class="form-control" placeholder="ID Pasien" id="id_rm" type="select" required="required" data-validation-required-message="Silahkan Masukkan ID Pasien"> 
	             	
	             	<?php $sqlRM = "SELECT * FROM tb_rekammedis INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien";
					$queryRM = mysqli_query($koneksi, $sqlRM); ?>
	             	<?php while($dataRM = mysqli_fetch_assoc($queryRM)){ ?>
					<option value="<?php echo $dataRM['id_rm']; ?>">
					<?php echo "ID RM : ". $dataRM['id_rm'];  echo " | ID Pasien :". $dataRM['id_pasien'];  echo " | Nama : ". $dataRM['nama']; ?>
					</option>
					<?php } ?>
	                <p class="help-block text-danger"></p>
	            	</select>
           		</div>
       			</div>

				<div class="control-group">
	            <div class="form-group floating-label-form-group controls mb-0 pb-2">
		        <input class="form-control" id="hai" name="hai" type="text" placeholder="ID OBAT" disabled="disabled">
		          	<?php $sqlOBAT 	= "SELECT * FROM tb_obat";
					$queryOBAT 		= mysqli_query($koneksi, $sqlOBAT);
		            while($dataOBAT = mysqli_fetch_assoc($queryOBAT)){ ?>
	            <input id="nama_obat" type="checkbox" name="nama_obat[]" placeholder="Nama Obat" value="<?php echo $dataOBAT['nama_obat']; ?>">
	          
		        <?php echo $dataOBAT['nama_obat'] ?>           
	          	      

	                <p class="help-block text-danger"></p>
	                <?php } ?>

	              </div>
	            </div>
	            <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Tanggal Periksa" disabled="disabled">
		                <p class="help-block text-danger"></p>	
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Tanggal Periksa</label>
	                <input class="form-control" id="tgl_periksa" type="date" name="tgl_periksa" placeholder="Tanggal Periksa" required="required" data-validation-required-message="Silahkan Masukkan Tanggal Periksa">
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
	//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->
	$sql = "SELECT * FROM tb_rm_obat 	";

	$query = mysqli_query($koneksi, $sql);

	
	echo "<fieldset>";
	echo "<h2 class=page-section-heading text-center text-uppercase text-secondary mb-0 align=center>TAMPIL DATA REKAM MEDIK OBAT</h2>";
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
			<th>ID</th>
			<th>ID REKAM MEDIK</th>
			<th>Nama Pasien</th>
			<th>Nama Obat</th>
			<th>Tanggal Periksa</th>
		  </tr>";
		  ?>
	</thead>	
	<tbody>
<?php
	while($data = mysqli_fetch_array($query)){
		?>
		
			<tr align=justify>
				<td><?php echo $data['id']; ?>		</td>
				<td><?php echo $data['id_rm']; ?>		</td>
				<td><?php $iddi = $data['id_rm']; 
					$sqlPasien = "SELECT tb_pasien.nama FROM tb_pasien 
					INNER JOIN tb_rekammedis ON tb_rekammedis.id_pasien = tb_pasien.id_pasien WHERE id_rm=$iddi";
					$queryPasien = mysqli_query($koneksi, $sqlPasien); ?>
	             	<?php while($dataPasien = mysqli_fetch_assoc($queryPasien)){ ?>
					<?php echo $dataPasien['nama'];
					} ?>	
				</td>

				<td><?php echo $data['nama_obat']; ?>			</td>
				<td><?php echo $data['tgl_periksa']; ?>			</td>		
				<td>
				<a href="rekamobat.php?aksi=delete&id=<?php echo $data['id']; ?>"
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
// --- Tutup Fungsi Update
// --- Fungsi Delete
function hapus($koneksi){
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE obat/DIGANTI MENYESUIKAN DATA TABLE       		-->
	if(isset($_GET['id']) && isset($_GET['aksi'])){
		$id 	 	= $_GET['id'];
		$sql_hapus 	= "DELETE FROM tb_rm_obat WHERE id=" . $id;
		$hapus 		= mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				header('location: rekamobat.php');
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
			echo"<button class='btn btn-success'><a href='rekamobat.php'>Home</a> </button> ";
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
