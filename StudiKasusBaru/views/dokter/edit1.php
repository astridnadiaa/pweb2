<?php
    include_once '../../config.php';
    include_once '../../controllers/DokterController.php';
    require '../../index.php';

    $database = new database();
    $db = $database->getKoneksi();

    if (isset($_GET['id_dokter'])) {
    $id = $_GET['id_dokter'];

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
<div class="px-5 py-15">
<h3>Tambah Data Dokter</h3>
<?php
  if ($dokterData) {
?>
<form action="" method="post">
    <div class="mb-3">
        <label for="nama_dokter" class="form-label">Nama Dokter</label>
        <input name="nama_dokter" type="text" class="form-control" id="" value="<?php echo $pasienData['nama_dokter']?>">
    </div>
    <div class="mb-3">
    <input class="btn btn-success mb-3 mt-2" type="submit" name="submit" value="Simpan" onclick="showAlert()">
    </div>
</form>

  <script>
    function showAlert() {
      alert ("Data Dokter berhasil ditambahkan")
    }
  </script>
</div>
