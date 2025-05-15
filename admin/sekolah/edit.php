<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id = $_GET['?'] ?? null;

if (!$?) {
    echo "ID Sekolah tidak ditemukan!";
    exit;
}

$query = mysqli_query($connection, "SELECT * FROM ? WHERE ? = '$?'");
$sekolah = mysqli_fetch_assoc($query);

if (!$?) {
    echo "Data sekolah tidak ditemukan!";
    exit;
}
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Edit Data Sekolah</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="./update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($sekolah['id']); ?>">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>Nama Sekolah</td>
                <td><input class="form-control" type="text" name="nama" value="<?php echo htmlspecialchars($sekolah['nama_sekolah']); ?>" required></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td><input class="form-control" type="text" name="telepon" value="<?php echo htmlspecialchars($sekolah['telepon']); ?>" required></td>
              </tr>
              <tr>
                <td>Latitude</td>
                <td><input class="form-control" type="text" name="latitude" value="<?php echo htmlspecialchars($sekolah['latitude']); ?>" required></td>
              </tr>
              <tr>
                <td>Longitude</td>
                <td><input class="form-control" type="text" name="longitude" value="<?php echo htmlspecialchars($sekolah['longitude']); ?>" required></td>
              </tr>
              <tr>
                <td>Foto</td>
                <td>
                  <?php if ($sekolah['foto']) : ?>
                    <img src="../<?php echo htmlspecialchars($sekolah['foto']); ?>" alt="Foto Sekolah" style="width: 100px; height: auto;">
                  <?php endif; ?>
                  <input class="form-control mt-2" type="file" name="foto">
                  <small class="text-muted">Kosongkan jika tidak ingin mengganti foto</small>
                </td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                  <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
