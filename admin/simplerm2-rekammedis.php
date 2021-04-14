<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN REKAM MEDIS</title>
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
<?php include 'menu.php'; ?>
</head>
<body id="page-top">




<?php
include"config.php";
$table = "tb_rekammedis";?>
<?php

// --- Fungsi tambah data (Create) / Input REKAM MEDIS Baru
function tambah($koneksi){
//DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE REKAM MEDIS/DIGANTI MENYESUIKAN DATA TABLE
	if (isset($_POST['btn_simpan']))
	{

		$id_rm 				= time();
		$id_pasien 			= $_POST['id_pasien'];
		$keluhan			= $_POST['keluhan'];
		$id_dokter 			= $_POST['id_dokter'];
		$diagnosa			= $_POST['diagnosa'];
		$id_poliklinik		= $_POST['id_poliklinik'];
		$tgl_periksa		= $_POST['tgl_periksa'];
			
		
		if(!empty($id_pasien) && !empty($keluhan) && !empty($id_dokter) && !empty($diagnosa)&& !empty($id_poliklinik)&& !empty($tgl_periksa))
		{
			$sql = "INSERT INTO tb_rekammedis (id_rm, id_pasien, keluhan, id_dokter, diagnosa, id_poliklinik, tgl_periksa ) 
			        VALUES(".$id_rm.",'".$id_pasien."','".$keluhan."', '".$id_dokter."','".$diagnosa."','".$id_poliklinik."','".$tgl_periksa."')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi']))
			{
				if($_GET['aksi'] == 'create')
				{
					header('location:rekammedis.php');
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
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ISI DATA REKAM MEDIS</h2>

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
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE REKAMMEDIS/DIGANTI MENYESUIKAN DATA TABLE       		-->
        	<fieldset>
            <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="ID Pasien" disabled="disabled">
		                <p class="help-block text-danger"></p>	
            	<div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="id_pasien" class="form-control" placeholder="ID Pasien" id="id_pasien" type="select" required="required" data-validation-required-message="Silahkan Masukkan ID Pasien" 
	             	value=" 
	             	<?php $sqlPasien = "SELECT * FROM tb_pasien";
					$queryPasien = mysqli_query($koneksi, $sqlPasien); ?>
	             	<?php while($dataPasien = mysqli_fetch_assoc($queryPasien)){ ?>
					<option value="<?php echo $dataPasien['id_pasien']; ?>">
					<?php echo $dataPasien['nama'];  echo " ". $dataPasien['id_pasien']; ?>
					</option>
					<?php } ?>"
	                <p class="help-block text-danger"></p>
	            	</select>
              		</div>
            	</div>


				<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Keluhan</label>
	                <input class="form-control" id="keluhan" type="text" name="keluhan" placeholder="Keluhan" required="required" data-validation-required-message="Silahkan Masukkan Keluhan Pasien">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>

				<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Nama Dokter" disabled="disabled">
		                <p class="help-block text-danger"></p>	
            	<div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="id_dokter" class="form-control" placeholder="Nama Dokter" id="id_dokter" type="select" required="required" data-validation-required-message="Silahkan Masukkan Nama Dokter"> 
	             	
	             	<?php $sqlDokter = "SELECT * FROM tb_dokter";
					$queryDokter = mysqli_query($koneksi, $sqlDokter); ?>
	             	<?php while($dataDokter = mysqli_fetch_assoc($queryDokter)){ ?>
					<option value="<?php echo $dataDokter['id_dokter']; ?>">
					<?php echo $dataDokter['nama_dokter']; 
					//$ambilDokter = $dataDokter['id_dokter'];
					?>

					</option>
					<?php } ?>"
	                <p class="help-block text-danger"></p>
	            	</select>
              		</div>
            	</div>



	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Diagnosa</label>
	                <input class="form-control" id="diagnosa" type="text" name="diagnosa" placeholder="Diagnosa Penyakit" required="required" data-validation-required-message="Silahkan Masukkan Diagnosa Penyakit">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>	

	           <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="poli" name="poli" type="text" placeholder="Nama Poliklinik" disabled="disabled">
		                <p class="help-block text-danger"></p>	
            	<div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="id_poliklinik" class="form-control" placeholder="Nama Poliklinik" id="id_poliklinik" type="select" required="required" data-validation-required-message="Silahkan Masukkan Nama Poliklinik"> 
	             	<?php $sqlpoliklinik = "SELECT * FROM tb_poliklinik";
					$querypoliklinik = mysqli_query($koneksi, $sqlpoliklinik); ?>
	             	<?php while($datapoliklinik = mysqli_fetch_assoc($querypoliklinik)){ ?>
					<option value="<?php echo $datapoliklinik['id_poliklinik']; ?>">
					<?php echo $datapoliklinik['nama_poliklinik']; ?>
					</option>
					<?php } ?>

	                <p class="help-block text-danger"></p>
	            	</select>
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
	$sql= "SELECT * FROM tb_rekammedis";
	//$sql= "SELECT DISTINCT id_pasien FROM tb_rekammedis";
	//DISTINCT

	$query = mysqli_query($koneksi, $sql);

	
	echo "<fieldset>";
	echo "<h2 class=page-section-heading text-center text-uppercase text-secondary mb-0 align=center>TAMPIL DATA REKAM MEDIS</h2>";
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
			<th>ID Rekam Medis</th>
			<th>Nama Pasien</th>
			<th>Keluhan</th>
			<th>Nama Dokter</th>
			<th>Diagnosa</th>
			<th>Nama Poliklinik</th>
			<th>Tanggal Periksa</th>
			<th>Pilihan</th>
		  </tr>";
		  ?>
	</thead>	
	<tbody>
<?php
	while($data = mysqli_fetch_array($query)){
		?>
		
			<tr align=justify>
				<td><?php echo $data['id_rm']; ?>		</td>

				<td><?php $id=$data['id_pasien']; 
					$sqlPasien = "SELECT tb_pasien.nama FROM tb_pasien WHERE id_pasien=$id";
					$queryPasien = mysqli_query($koneksi, $sqlPasien); ?>
	             	<?php while($dataPasien = mysqli_fetch_assoc($queryPasien)){ ?>
					<?php echo $dataPasien['nama'];
					} ?>	
				</td>

				<td><?php echo $data['keluhan']; ?>		</td>
				
				<td><?php $dok=$data['id_dokter']; 
					$sqlDok = "SELECT tb_dokter.nama_dokter FROM tb_dokter WHERE id_dokter=$dok";
					$queryDok = mysqli_query($koneksi, $sqlDok); ?>
	             	<?php while($dataDok = mysqli_fetch_assoc($queryDok)){ ?>
					<?php echo $dataDok['nama_dokter'];
					} ?>	
				</td>

				<td><?php echo $data['diagnosa']; ?>			</td>

				<td><?php $poli=$data['id_poliklinik']; 
					$sqlpoliklinik = "SELECT tb_poliklinik.nama_poliklinik FROM tb_poliklinik WHERE id_poliklinik = $poli";
					$querypoliklinik = mysqli_query($koneksi, $sqlpoliklinik); ?>
	             	<?php while($datapoliklinik = mysqli_fetch_assoc($querypoliklinik)){ ?>
					<?php echo $datapoliklinik['nama_poliklinik'];
					} ?>	
				</td>

				<td><?php echo $data['tgl_periksa']; ?>			</td>
				<td><a href="rekammedis.php?aksi=update&id_rm=<?php echo $data['id_rm']; ?>
						&id_pasien=		<?php echo $data['nama']; ?>
						&keluhan=		<?php echo $data['keluhan']; ?>
						&id_dokter=		<?php echo $data['nama_dokter']; ?>
						&diagnosa=		<?php echo $data['diagnosa']; ?>
						&id_poliklinik=	<?php echo $data['nama_poliklinik']; ?>
						&tgl_periksa=	<?php echo $data['tgl_periksa']; ?>"
						
					<button class="btn btn-success">
					<i class="icon-large icon-edit" title="EDIT"></a></i></button>
					<a href="rekammedis.php?aksi=delete&id_rm=<?php echo $data['id_rm']; ?>"
					<button class="btn btn-danger" >
					<i class="icon-large icon-remove" title="HAPUS"></a></i></button>
					<a href="tampilrekammedis.php?&tp= <?php echo $data['id_rm']; ?>"
					<button class="btn btn-info" title="CETAK HALAMAN INI">
					<i class="icon-print"></a></i></button>
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

		$id_rm 				= $_POST['id_rm'];
		$id_pasien 			= $_POST['id_pasien'];
		$id_dokter 			= $_POST['id_dokter'];
		$keluhan			= $_POST['keluhan'];
		$id_poliklinik		= $_POST['id_poliklinik'];
		$diagnosa			= $_POST['diagnosa'];
		$tgl_periksa		= $_POST['tgl_periksa'];
			
			
		if(!empty($id_pasien) && !empty($id_dokter) && !empty($keluhan) && !empty($id_poliklinik)&& !empty($diagnosa)&& !empty($tgl_periksa)) {
			$perubahan="id_pasien='".$id_pasien."',id_dokter='".$id_dokter."',keluhan='".$keluhan."',id_poliklinik='".$id_poliklinik."',diagnosa='".$diagnosa."',tgl_periksa='".$tgl_periksa."'";
			$sql_update = "UPDATE tb_rekammedis SET ".$perubahan." WHERE id_rm=$id_rm";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					header('location:rekammedis.php');
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	


	// TAMPILAN UNTUK FORM UBAH / FORM UNTUK UPDATE TABLE
	if(isset($_GET['id_rm'])){
		?>
			<button class="btn btn-success"><a href="rekammedis.php">Home</a> </button> 				<!-- LINK KE HALAMAN HOME / INDEX -->
			<button class="btn btn-info"><a href="rekammedis.php?aksi=create">Tambah Data</a></button> 	<!-- JIKA INGIN TAMBAH DOKTER -->
			<hr>
			 <nav class="navbar" id="mainNav">
			<form action="" method="POST" >
 <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EDIT DATA REKAM MEDIS</h2>

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
       			<input type="hidden" name="id_rm" value="<?php echo $_GET['id_rm'] ?>"/>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>ID Pasien</label>
		                <input class="form-control" id="id_pasien" name="id_pasien" type="text" placeholder="Name Dokter" required="required" data-validation-required-message="Silahkan Masukkan ID Pasien" value="<?php echo $_GET['id_pasien'] ?>">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            	
            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Keluhan</label>
	                <input class="form-control" id="keluhan" type="text" name="keluhan" placeholder="Keluhan Pasien" required="required" data-validation-required-message="Silahkan Masukkan Keluhan Pasien" value="<?php echo $_GET['keluhan']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>

            	<div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>ID Dokter</label>
	                <input class="form-control" id="id_dokter" type="text" name="id_dokter" placeholder="ID Dokter" required="required" data-validation-required-message="Silahkan Masukkan ID Dokter" value="<?php echo $_GET['id_dokter']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>

	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Diagnosa</label>
	                <input class="form-control" id="diagnosa" type="text" name="diagnosa" placeholder="Diagnosa" required="required" data-validation-required-message="Silahkan Masukkan Diagnosa" value="<?php echo $_GET['diagnosa']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>

	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>ID Poliklinik</label>
	                <input class="form-control" id="id_poliklinik" type="text" name="id_poliklinik" placeholder="Diagnosa" required="required" data-validation-required-message="Silahkan Masukkan ID Poliklinik" value="<?php echo $_GET['id_poliklinik']?>" >
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Tanggal Periksa</label>
	                <input class="form-control" id="tgl_periksa" type="date" name="tgl_periksa" placeholder="Tanggal Periksa" required="required" data-validation-required-message="Silahkan Masukkan Tanggal Periksa" value="<?php echo $_GET['tgl_periksa']?>" >
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
							<button name="reset" button class="btn btn-primary btn-danger" /><a href="rekammedis.php?aksi=delete&id_rm=<?php echo $_GET['id_rm'] ?>"> (x) Hapus data ini !</a></button>
	            		
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
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE DOKTER/DIGANTI MENYESUIKAN DATA TABLE       		-->
	if(isset($_GET['id_rm']) && isset($_GET['aksi'])){
		$id_rm 		= $_GET['id_rm'];
		$sql_hapus 	= "DELETE FROM tb_rekammedis WHERE id_rm=" . $id_rm;
		$hapus 		= mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				header('location:rekammedis.php');
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
			echo"<button class='btn btn-success'><a href='rekammedis.php'>Home</a> </button> ";
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
