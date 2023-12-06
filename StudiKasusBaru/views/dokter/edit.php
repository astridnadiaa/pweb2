<?php
  include_once '../../config.php';
  include_once '../../controllers/DokterController.php';
  require '../../index.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];

    $dokterController = new DokterController($db);
    $dokterData = $dokterController->getDokterById($id_dokter);

    if ($dokterData) {
        if (isset($_POST['submit'])) {
            $nama_dokter = $_POST['nama_dokter'];

            $result = $dokterController->updateDokter($id_dokter, $nama_dokter);
            if ($result) {
                header("location:dokter");
            } else {
                header("location:edit.php");
            }
        } 
    } else {
        echo "Dokter tidak ditemukan";
    }
  }
?>
<h3>Edit Data Dokter</h3>
<?php
  if ($dokterData) {
?>
<form action="" method="post">
    <table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_dokter" value="<?php echo $dokterData['nama_dokter']; ?>"></td>
    </tr>
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
<div>
  <script>
    function showAlert() {
      alert ("Data Dokter berhasil diperbarui")
    }
  </script>
</div>
