<?php
  include_once '../../config.php';
  include_once '../../controllers/DosenController.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($nip, $nama, $alamat);
            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit,php");
            }
        } 
    } else {
        echo "Dosen tidak ditemukan";
    }
  }
?>

<h3>Edit Data Dosen</h3>
<?php
  if ($dosenData) {
?>
    <form action="" method="POST">
        <?php
        foreach ($dosenData as $d => $value) {
        ?>
        <table border="0">
            <tr>
                <td width="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <input type="text" name="<?php echo $d ?>" value = "<?php echo $value ?>">
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td></td>
            <td><input class="btn btn-success mb-3 mt-2" type="submit" name="submit" value="Simpan"></td>
        </tr>
        </table>
    </form>
<?php
  }
?>