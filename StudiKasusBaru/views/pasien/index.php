<?php
  //memanggil class model database
  include_once '../../config.php';
  include_once '../../controllers/PasienController.php';
  include_once '../../controllers/DokterController.php';
  require '../../index.php';

  //instansiasi class database
  $database = new database;
  $db = $database->getKoneksi();

  $pasienController = new PasienController($db);
  $pasien = $pasienController->getAllPasien(); //mengambil data dari tabel pasien

?>

<div class="px-5">
<h3>Data Pasien</h3>
<a class="btn btn-primary mb-3 mt-2" href="tambah_pasien">Tambah Pasien</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Penyakit</th>
        <th>Keluhan</th>
        <th>Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($pasien as $x) {
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tgl_lahir'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td><?php echo $x['no_hp'] ?></td>
            <td><?php echo $x['penyakit'] ?></td>
            <td><?php echo $x['keluhan'] ?></td>
            <td>
                <a class="btn btn-warning" href="edit_pasien?id=<?php echo $x['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus_pasien?id=<?php echo $x['id']; ?>"
                onclick="return confrim('Apakah anda yakin akan menghapus data??')">Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>
</div>
</div>