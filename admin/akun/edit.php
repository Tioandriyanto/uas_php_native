<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_user = mysqli_real_escape_string($connection, $_GET['id_user']);
$query = mysqli_query($connection, "SELECT * FROM tb_user WHERE id_user ='$id_user'");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Ubah Data Akun</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./update.php" method="post">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <!-- Hidden Field untuk ID Anggota -->
              <input type="hidden" name="id_user" value="<?= htmlspecialchars($row['id_user']) ?>">

              <table cellpadding="8" class="w-100">
                <tr>
                  <td>Nama</td>
                  <td><input class="form-control" type="text" name="nama" value="<?= htmlspecialchars($row['nama']) ?>" readonly></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td><input class="form-control" type="text" name="username" required value="<?= htmlspecialchars($row['username']) ?>"></td>
                </tr>
                <tr>
                  <td>password</td>
                  <td><input class="form-control" type="text" name="password" required value="<?= htmlspecialchars($row['password']) ?>"></td>
                </tr>
                <tr>
                  <td>Level</td>
                  <td><input class="form-control" type="text" name="level_disabled" value="<?= htmlspecialchars($row['level']) ?>" readonly></td>
                </tr>

                <tr>
                  <td>
                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                  </td>
                </tr>
              </table>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
