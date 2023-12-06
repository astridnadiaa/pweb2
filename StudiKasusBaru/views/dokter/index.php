<?php
  //memanggil class model database
  include_once '../../config.php';
  include_once '../../controllers/DokterController.php';
  require '../../index.php';

  //instansiasi class database
  $database = new database;
  $db = $database->getKoneksi();

  $dokterController = new DokterController($db);
  $dokter = $dokterController->getAllDokter(); //mengambil data dari tabel dokter
?>

<div class="px-5">
<h3>Data Dokter</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambah_dokter">Tambah Dokter</a>

<table border="1" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($dokter as $x) {
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nama_dokter'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit_dokter?id_dokter=<?php echo $x['id_dokter']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus_dokter?id_dokter=<?php echo $x['id_dokter']; ?>"
                onclick="return confrim('Apakah anda yakin akan menghapus data??')">Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>
</div>
</div>