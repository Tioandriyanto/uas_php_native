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

<!-- Hilangkan background -->
<style>
  body {
    background: #f8f9fc !important;
  }
  .dashboard-cards {
    display: flex;
    gap: 24px;
    flex-wrap: wrap;
    justify-content: flex-start;
    margin-top: 32px;
  }
  .card-statistic-1 {
    flex: 1 1 250px;
    min-width: 250px;
    max-width: 350px;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.07);
    padding: 24px;
    display: flex;
    align-items: center;
    transition: box-shadow 0.2s;
  }
  .card-statistic-1:hover {
    box-shadow: 0 4px 24px rgba(0,0,0,0.13);
  }
  .card-icon {
    font-size: 2.5rem;
    margin-right: 20px;
    color: #fff;
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
  }
  .bg-primary { background: #4e73df; }
  .bg-danger { background: #e74a3b; }
  .bg-success { background: #1cc88a; }
  .card-header h4 {
    margin: 0;
    font-size: 1.1rem;
    color: #6c757d;
  }
  .card-body {
    font-size: 2rem;
    font-weight: bold;
    color: #343a40;
  }
</style>

<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="dashboard-cards">
    <!-- Minuman -->
    <div class="card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="fas fa-coffee"></i>
      </div>
      <div>
        <div class="card-header">
          <h4>Minuman</h4>
        </div>
        <div class="card-body">
          <?php
          $query = "SELECT COUNT(*) as total FROM makanan WHERE jenis='minuman'";
          $result = mysqli_query($connection, $query);
          $data = mysqli_fetch_assoc($result);
          echo $data['total'];
          ?>
        </div>
      </div>
    </div>
    <!-- Makanan -->
    <div class="card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-hamburger"></i>
      </div>
      <div>
        <div class="card-header">
          <h4>Makanan</h4>
        </div>
        <div class="card-body">
          <?php
          $query = "SELECT COUNT(*) as total FROM makanan WHERE jenis='makanan'";
          $result = mysqli_query($connection, $query);
          $data = mysqli_fetch_assoc($result);
          echo $data['total'];
          ?>
        </div>
      </div>
    </div>
    <!-- Total Pesanan -->
    <div class="card-statistic-1">
      <div class="card-icon bg-success">
        <i class="fas fa-list"></i>
      </div>
      <div>
        <div class="card-header">
          <h4>Total Pesanan</h4>
        </div>
        <div class="card-body">
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
</section>

<?php
require_once '../layout/_bottom.php';
?>