<?php
require_once '../layout/_top.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Input Data Sekolah</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- Form -->
          <form action="store.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>Nama Sekolah</td>
                <td><input class="form-control" type="text" id="nama" name="nama" required></td>
              </tr>
              <tr>
                <td>Telepon</td>
                <td><input class="form-control" type="text" id="telepon" name="telepon"></td>
              </tr>
              <tr>
                <td>Latitude</td>
                <td><input class="form-control" type="text" id="latitude" name="latitude" required></td>
              </tr>
              <tr>
                <td>Longitude</td>
                <td><input class="form-control" type="text" id="longitude" name="longitude" required></td>
              </tr>
              <tr>
                <td>Foto Lokasi</td>
                <td><input class="form-control" type="file" id="foto" name="foto" accept="image/*" required></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" value="Simpan">
                  <input class="btn btn-danger" type="reset" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
