<?php

session_start(); // Wajib untuk menggunakan $_SESSION

// Cek apakah user sudah login
if (!isset($_SESSION['login']) || $_SESSION['login']['level'] != 'admin') {
  header('Location: ../login.php');
  exit;
}

require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>
<!-- Bootstrap 5 CDN (if not already included in _top.php) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="container py-5">
  <div class="mb-4">
    <h1 class="fw-bold">Dashboard</h1>
  </div>
  <div class="row g-4">
    <!-- Minuman -->
    <div class="col-md-4">
      <div class="card shadow h-100 border-0">
        <div class="card-body d-flex align-items-center">
          <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;font-size:2rem;">
            <i class="fas fa-coffee"></i>
          </div>
          <div>
            <h6 class="mb-1 text-muted">Minuman</h6>
            <div class="h3 mb-0">
              <?php
              $query = "SELECT COUNT(*) as total FROM makanan WHERE jenis='minuman'";
              $result = mysqli_query($connection, $query);
              $data = mysqli_fetch_assoc($result);
              echo $data['total'];
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Makanan -->
    <div class="col-md-4">
      <div class="card shadow h-100 border-0">
        <div class="card-body d-flex align-items-center">
          <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;font-size:2rem;">
            <i class="fas fa-hamburger"></i>
          </div>
          <div>
            <h6 class="mb-1 text-muted">Makanan</h6>
            <div class="h3 mb-0">
              <?php
              $query = "SELECT COUNT(*) as total FROM makanan WHERE jenis='makanan'";
              $result = mysqli_query($connection, $query);
              $data = mysqli_fetch_assoc($result);
              echo $data['total'];
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Total Pesanan -->
    <div class="col-md-4">
      <div class="card shadow h-100 border-0">
        <div class="card-body d-flex align-items-center">
          <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:56px;height:56px;font-size:2rem;">
            <i class="fas fa-list"></i>
          </div>
          <div>
            <h6 class="mb-1 text-muted">Total Pesanan</h6>
            <div class="h3 mb-0">
              <?php
              $query = "SELECT COUNT(*) as total FROM makanan";
              $result = mysqli_query($connection, $query);
              $data = mysqli_fetch_assoc($result);
              echo $data['total'];
              ?>
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