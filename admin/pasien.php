<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN PASIEN</title>
	<?php 
	
	session_start();
	include 'cek.php';
	include 'config.php';
	$table = "tb_pasien";
		

//include 'header.php';
include 'aksesoris.html'; 
include 'menu.php';


?>


</head>


<?php

// --- Fungsi tambah data (Create) / Input Pasien Baru
function tambah($koneksi){
//DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE
	if (isset($_POST['btn_simpan']))
	{
		$id_pasien 				= time();
		$nama 					= $_POST['nama'];
		$jk 					= $_POST['jk'];
		$nomor_identitas		= $_POST['nomor_identitas'];
		$no_telp 				= $_POST['no_telp'];
		$alamat 				= $_POST['alamat'];
		$ps 					= $_POST['ps'];
		$tgl_lhr 				= $_POST['tgl_lhr'];


	
		
		if(!empty($nama) && !empty($jk) && !empty($nomor_identitas) && !empty($no_telp)&& !empty($alamat)&& !empty($ps)&& !empty($tgl_lhr))
		{
			$sql = "INSERT INTO tb_pasien (id_pasien, nama, jk, nomor_identitas, no_telp, alamat,ps,tgl_lhr) 
			        VALUES(".$id_pasien.",'".$nama."','".$jk."','".$nomor_identitas."','".$no_telp."','".$alamat."','".$ps."','".$tgl_lhr."')";
			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi']))
			{
				if($_GET['aksi'] == 'create')
				{
					header('location: pasien.php');
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
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ISI DATA PASIEN</h2>

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
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE       		-->
       			<fieldset>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama Pasien</label>
		                <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama Pasien" required="required" data-validation-required-message="Silahkan Masukkan Nama Pasien">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Jenis Kelamin" disabled="disabled">
		                <p class="help-block text-danger"></p>	
	            <div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="jk" class="form-control" placeholder="Jenis Kelamin" id="jk" type="select" required="required" data-validation-required-message="Silahkan Masukkan Jenis Kelamin Pasien">
	              	    <option disabled="">Jenis Kelamin</option>
		                <option>Laki-Laki</option>
		                <option>Perempuan</option>
	                <p class="help-block text-danger"></p>
	            	</select>
              		</div>
            	</div>    	</div>	</div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Nomor Identitas Pasien</label>
	                <input class="form-control" id="nomor_identitas" type="text" name="nomor_identitas" placeholder="Nomor Identitas Pasien" required="required" data-validation-required-message="Silahkan Masukkan nomor_identitas Pasien">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Nomor Telepon Pasien</label>
	                <input class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon Pasien" required="required" data-validation-required-message="Silahkan Masukkan no_telp Pasien">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Alamat</label>
	                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat Pasien" required="required" data-validation-required-message="Silahkan Masukkan Alamat Pasien">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	         <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="haii" name="haii" type="text" placeholder="Program Studi" disabled="disabled">
		                <p class="help-block text-danger"></p>	
	            <div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="ps" class="form-control" placeholder="Program Studi" id="ps" type="select" required="required" data-validation-required-message="Silahkan Masukkan Program Studi Pasien">
	              	    <option disabled="">Program Studi</option>
		                <option>D4 Teknik Informatika</option>
		                <option>D4 Akuntansi Sektor Publik</option>
		                <option>D3 Kebidanan</option>
		                <option>D3 Farmasi</option>
		                <option>D3 Akuntansi</option>
		                <option>D3 Teknik Komputer</option>
		                <option>D3 Teknik Mesin</option>
		                <option>D3 Teknik Elektronika</option>
		                <option>D3 Perhotelan</option>
		                <option>D3 Desain Komunikasi Visual</option>
		                <option>D3 Keperawatan</option>
		                <option>Karyawan</option>
		                <option>Pasien Umum</option>
	                <p class="help-block text-danger"></p>
	            	</select>
              		</div>
            	</div>    	</div>	</div>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Tanggal Lahir" disabled="disabled">
		                <p class="help-block text-danger"></p>	
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Tanggal Lahir</label>
		                <input class="form-control" id="tgl_lhr" name="tgl_lhr" type="date" placeholder="Tanggal Lahir" required="required" data-validation-required-message="Silahkan Masukkan Tanggal Lahir Pasien">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            </div>
        </div>
<!--	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Jenis Penyakit Pasien</label>
	                <input class="form-control" id="kt_penyakit" type="text" name="kt_penyakit" placeholder="Jenis Penyakit Pasien" required="required" data-validation-required-message="Silahkan Masukkan Jenis Penyakit Pasien">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Jenis Pembayaran" disabled="disabled">
	            	<div class="control-group">
	                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
		             <select name="jn_bayar" class="form-control" placeholder="Jenis Pembayaran" id="jn_bayar" type="select" required="required" data-validation-required-message="Silahkan Masukkan Jenis Pembayaran ">
		              	        <option disabled="">Jenis Pembayaran</option>
			                    <option>Umum</option>
			                    <option>BPJS</option>
		                <p class="help-block text-danger"></p>
	            	</select>
	              </div></div>--></div>
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
	//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE       		-->
	$sql = "SELECT * FROM tb_pasien";
	$query = mysqli_query($koneksi, $sql);

	
	echo "<fieldset>";
	echo "<h2 class=page-section-heading text-center text-uppercase text-secondary mb-0 align=center>TAMPIL DATA PASIEN</h2>";
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
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin </th>
			<th>Nomor Identitas</th>
			<th>Nomor Telepon</th>
			<th>Alamat</th>
			<th>Program Studi</th>
			<th>Tanggal Lahir</th>
			<th>Umur</th>
			<th>Pilihan</th>
		  </tr>";
		  ?>
	</thead>	
	<tbody>
<?php
	while($data = mysqli_fetch_array($query)){
		?>
		
			<tr align=justify>
				<td><?php echo $data['id_pasien']; ?>		</td>
				<td><?php echo $data['nama']; ?>		</td>
				<td><?php echo $data['jk']; ?>			</td>
				<td><?php echo $data['nomor_identitas']; ?>		</td>
				<td><?php echo $data['no_telp']; ?>	</td>
				<td><?php echo $data['alamat']; ?>		</td>
				<td><?php echo $data['ps']; ?>		</td>
				<td><?php echo $data['tgl_lhr']; ?>		</td>
				<td><?php 
				//$sekarang   = date('Y-m-d'); 
				//$lhr 		=	$data['tgl_lhr'];
				$lahir = new DateTime($data['tgl_lhr']);
				$today = new DateTime('today');
				$y 	   = $today->diff($lahir)->y;
				$m	   = $today->diff($lahir)->m;
				$d 	   = $today->diff($lahir)->d;
				if($y < 100)
				{
					if($y!=0)
					{
						$tahun=$y;
					}
				else{
					$tahun="0";
					}									}
				echo "umur = ". $tahun." tahun ". $m." bulan"; 
				
				//$usia		= $sekarang->diff($lhr);
				//echo 'Usia'.$usia->Y.'Tahun'.$usia->m.'Bulan'.$usia->d.'Hari' ;
				/*list($th_sekarang, $bln_sekarang, $tgl_sekarang) = explode('-', date('Y-m-d'));
				list($th_lhr, $bln_lhr, $tgl_lhr) = explode('-', date('Y-m-d', strtotime($lhr)));
				$umur = $th_sekarang-$th_lhr;
				if($bln_sekarang<$bln_lhr)
					$umur--;
				else if(($bln_sekarang==$bln_lhr)&&($tgl_sekarang<$tgl_lhr))
					$umur--;
					echo "umur =".$umur;
				*/

				?></td>

				
	
				<td>

						<a href="pasien.php?aksi=update&id_pasien=<?php echo $data['id_pasien']; ?>
						&nama=<?php echo $data['nama']; ?>
						&jk=<?php echo $data['jk']; ?>
						&nomor_identitas=<?php echo $data['nomor_identitas']; ?>
						&no_telp=<?php echo $data['no_telp']; ?>
						&alamat=<?php echo $data['alamat']; ?>"
					<button class="btn btn-success">
					<i class="icon-large icon-edit"></a></i></button>

					<a href="pasien.php?aksi=delete&id_pasien=<?php echo $data['id_pasien']; ?>"
					<button class="btn btn-danger" >
					<i class="icon-large icon-remove"></a></i></button>


<!--					<a href="pasien.php?aksi=delete&id_pasien=<?php echo $data['id_pasien']; ?>"
					<button class="btn btn-danger" >
					<i class="icon-large icon-remove"></a></i></button>
-->                                                
					
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
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE       		-->
	// ubah data
	if(isset($_POST['btn_ubah'])){
		$id_pasien				= $_POST['id_pasien'];
		$nama 					= $_POST['nama'];
		$jk 					= $_POST['jk'];
		$nomor_identitas 		= $_POST['nomor_identitas'];
		$no_telp 				= $_POST['no_telp'];
		$alamat 				= $_POST['alamat'];


		
		if(!empty($nama) && !empty($jk) && !empty($nomor_identitas) && !empty($no_telp)&& !empty($alamat)){
			$perubahan="nama='".$nama."',jk='".$jk."',nomor_identitas='".$nomor_identitas."',no_telp='".$no_telp."',alamat='".$alamat."'";
			$sql_update = "UPDATE tb_pasien SET ".$perubahan." WHERE id_pasien=$id_pasien";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					header('location:pasien.php');
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	


	// TAMPILAN UNTUK FORM UBAH / FORM UNTUK UPDATE TABLE
	if(isset($_GET['id_pasien'])){
		?>
			<button class="btn btn-success"><a href="pasien.php">Home</a> </button> 				<!-- LINK KE HALAMAN HOME / INDEX -->
			<button class="btn btn-info"><a href="pasien.php?aksi=create">Tambah Data</a></button> 	<!-- JIKA INGIN TAMBAH PASIEN -->
			<hr>
			 <nav class="navbar" id="mainNav">
			<form action="" method="POST" >
 			<div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EDIT DATA PASIEN</h2>

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
<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE       		-->       		
       			<fieldset>
       			<input type="hidden" name="id_pasien" value="<?php echo $_GET['id_pasien'] ?>"/>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		                <label>Nama Pasien</label>
		                <input class="form-control" id="nama" name="nama" type="text" placeholder="Name Pasien" required="required" data-validation-required-message="Silahkan Masukkan Nama Pasien" value="<?php echo $_GET['nama'] ?>">
		                <p class="help-block text-danger"></p>
              		</div>
            	</div>
            	<div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Jenis Kelamin" disabled="disabled">
		                <p class="help-block text-danger"></p>	
	            <div class="control-group">
	               	<div class="form-group floating-label-form-group controls mb-0 pb-2">
	             	<select name="jk" class="form-control" placeholder="Jenis Kelamin" id="jk" type="select" required="required" data-validation-required-message="Silahkan Masukkan Jenis Kelamin Pasien" value="<?php echo $_GET['jk'] ?>">
	              	    <option selected="yoi" =""><?php echo $_GET['jk'] ?></option>
		                <option>Laki-Laki</option>
		                <option>Perempuan</option>
	                <p class="help-block text-danger"></p>
	            	</select>
              		</div>
            	</div>    	</div>	</div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>nomor_identitas Pasien</label>
	                <input class="form-control" id="nomor_identitas" type="text" name="nomor_identitas" placeholder="nomor_identitas Pasien" required="required" data-validation-required-message="Silahkan Masukkan nomor_identitas Pasien" value="<?php echo $_GET['nomor_identitas'] ?>">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>no_telp Pasien</label>
	                <input class="form-control" id="no_telp" name="no_telp" placeholder="no_telp" required="required" data-validation-required-message="Silahkan Masukkan no_telp Pasien" value="<?php echo $_GET['no_telp'] ?>">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Alamat</label>
	                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat Pasien" required="required" data-validation-required-message="Silahkan Masukkan Alamat Pasien" value="<?php echo $_GET['alamat'] ?>">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
<!--	            <div class="control-group">
	              <div class="form-group floating-label-form-group controls mb-0 pb-2">
	                <label>Jenis Penyakit Pasien</label>
	                <input class="form-control" id="kt_penyakit" type="text" name="kt_penyakit" placeholder="Jenis Penyakit Pasien" required="required" data-validation-required-message="Silahkan Masukkan Jenis Penyakit Pasien" value="<?php echo $_GET['kt_penyakit'] ?>">
	                <p class="help-block text-danger"></p>
	              </div>
	            </div>
	            <div class="control-group">
	              	<div class="form-group floating-label-form-group controls mb-0 pb-2">
		               <input class="form-control" id="hai" name="hai" type="text" placeholder="Jenis Pembayaran" disabled="disabled">
	            	<div class="control-group">
	                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
		             <select name="jn_bayar" class="form-control" placeholder="Jenis Pembayaran" id="jn_bayar" type="select" required="required" data-validation-required-message="Silahkan Masukkan Jenis Pembayaran " value="<?php echo $_GET['jn_bayar'] ?>">
		              	        <option selected="<?php echo $_GET['jn_bayar'] ?>"><?php echo $_GET['jn_bayar'] ?></option>
			                    <option>Umum</option>
			                    <option>BPJS</option>
		                <p class="help-block text-danger"></p>
	            	</select>
	              </div></div></div>
            	</div>
--> 
            <br>    
                  


				<div id="success"></div>
	            	<div class="control-group">
	            		<div class="form-group floating-label-form-group controls mb-0 pb-2" align=center>
			            	<button type="submit" name="btn_ubah" button class="btn btn-primary btn-info" id="sendMessageButton"/>EDIT</button>
							<button name="reset" button class="btn btn-primary btn-danger" /><a href="pasien.php?aksi=delete&id_pasien=<?php echo $_GET['id_pasien'] ?>"> (x) Hapus data ini !</a></button>
	            		
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
//<!-- //DI GANTI MENYESUAIKAN TABLE/ KALO INI TABLE PASIEN/DIGANTI MENYESUIKAN DATA TABLE       		-->
	if(isset($_GET['id_pasien']) && isset($_GET['aksi'])){
		$id_pasien 	= $_GET['id_pasien'];
		$sql_hapus 	= "DELETE FROM tb_pasien WHERE id_pasien=" . $id_pasien;
		$hapus 		= mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				header('location: pasien.php');
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
			echo"<button class='btn btn-success'><a href='pasien.php'>Home</a> </button> ";
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
