<?php
session_start();
require_once '../layout/_top.php';
require_once '../helper/connection.php';

// Ambil data dari tabel sekolah
$result = mysqli_query($connection, "SELECT * FROM ?"); // <-- fill this section
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Data Sekolah</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Sekolah</th>
                  <th>Telepon</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data['nama_sekolah']) ?></td>
                    <td><?= htmlspecialchars($data['telepon']) ?></td>
                    <td><?= htmlspecialchars($data['latitude']) ?></td>
                    <td><?= htmlspecialchars($data['longitude']) ?></td>
                    <td>
                      <?php if ($data['foto']) : ?>
                        <img src="../../<?= htmlspecialchars($data['foto']) ?>" alt="Foto Sekolah" style="width: 100px; height: auto;">
                      <?php else : ?>
                        <span>Tidak ada foto</span>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-info mb-md-0 mb-1" href="edit.php?id=<?= $data['id'] ?>">
                        <i class="fas fa-edit fa-fw"></i> Edit
                      </a>
                      <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <i class="fas fa-trash fa-fw"></i> Hapus
                      </a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>

<!-- Page Specific JS File -->
<script src="../assets/js/page/modules-datatables.js"></script>
