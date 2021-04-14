
<?php
include "aksesoris.html";
// --- koneksi ke database
$koneksi = mysqli_connect("localhost","root","","klinik") or die(mysqli_error());

$table = "tb_pasien";?>
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6"> 
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
					<?php $sql = "SELECT * FROM $table WHERE jk='perempuan'";
					$query = mysqli_query($koneksi,$sql);
					$count = mysqli_num_rows($query);
					echo "$count";
					?></h3>
              <p>JUMLAH PASIEN PEREMPUAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
<!-- Main content -->
    
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!--<div class="col-lg-3 col-xs-6">-->
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
					<?php $sql = "SELECT * FROM $table WHERE jk='laki-laki'";
					$query = mysqli_query($koneksi,$sql);
					$count = mysqli_num_rows($query);
					echo "$count";
					?></h3>
              <p>JUMLAH PASIEN LAKI-LAKI</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> </div></section>
        <!-- ./col -->
