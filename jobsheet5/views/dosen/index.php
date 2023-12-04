<?php
  //memanggil class model database
  include_once '../../config.php';
  include_once '../../controllers/DosenController.php';
  require '../../index.php';

  //instansiasi class database
  $database = new database;
  $db = $database->getKoneksi();

  $dosenController = new DosenController($db);
  $dosen = $dosenController->getAllDosen(); //mengambil data dari tabel dosen
?>

<div class="px-5">
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambah_dosen">Tambah Dosen</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($dosen as $x) {
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nip'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit_dosen?id=<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus_dosen?id=<?php echo $x['id']; ?>"
                onclick="return confrim('Apakah anda yakin akan menghapus data??')">Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>
</div>
</div>