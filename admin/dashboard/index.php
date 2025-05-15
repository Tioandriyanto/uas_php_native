<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// Menghitung jumlah SD dan SMP berdasarkan pola pada nama
$query_sd = mysqli_query($connection, "SELECT COUNT(*) FROM sekolah WHERE nama_sekolah LIKE '%SD%'");
$query_smp = mysqli_query($connection, "SELECT COUNT(*) FROM sekolah WHERE nama_sekolah LIKE '%SMP%'");

$total_sd = mysqli_fetch_array($query_sd)[0];
$total_smp = mysqli_fetch_array($query_smp)[0];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total SD</h4>
            </div>
            <div class="card-body">
              <?= $total_sd ?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total SMP</h4>
            </div>
            <div class="card-body">
              <?= $total_smp ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
require_once '../layout/_bottom.php';
?>

