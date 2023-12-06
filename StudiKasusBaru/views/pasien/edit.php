<?php
  include_once '../../config.php';
  include_once '../../controllers/PasienController.php';
  require '../../index.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $pasienData = $pasienController->getPasienById($id);

    if ($pasienData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $penyakit = $_POST['penyakit'];
            $keluhan = $_POST['keluhan'];

            $result = $pasienController->updatePasien($id, $nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan);
            if ($result) {
                header("location:pasien");
            } else {
                header("location:edit.php");
            }
        } 
    } else {
        echo "Pasien tidak ditemukan";
    }
  }
?>

<h3>Edit Data Pasien</h3>
<?php
  if ($pasienData) {
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $pasienData['nama']?>"></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td><input type="date" name="tgl_lahir" value="<?php echo $pasienData['tgl_lahir']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="laki-laki"<?php echo ($pasienData['jenis_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="perempuan" <?php echo ($pasienData['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
                <td><input name="alamat" value="<?php echo $pasienData['alamat']?>"></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="no_hp" value="<?php echo $pasienData['no_hp']?>"></td>
        </tr>
        <tr>
            <td>Penyakit</td>
            <td><input type="text" name="penyakit" value="<?php echo $pasienData['penyakit']?>"></td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td><input type="text" name="keluhan" value="<?php echo $pasienData['keluhan']?>"></td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success mb-3 mt-2" type="submit" name="submit" value="Simpan"></td>
            </tr>
        </tr>
    </table>
</form>
<?php
  }
?>

  <script>
    function showAlert() {
      alert ("Data Pasien berhasil diperbarui")
    }
  </script>
</div>
