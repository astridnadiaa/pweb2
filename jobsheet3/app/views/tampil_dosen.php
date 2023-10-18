<?php
    // memanggil class database
    include '../classes/database.php';

    // instansiasi class database
    $db = new database;
?>

<h3>Data Mahasiswa</h3>
<a href="tambah_dosen.php">Tambah Dosen</a>
<br>
<table border="1">
    <tr>
        <th>No</th>
        <th>nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($db->tampil_dosen() as $x) {
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nip'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
                <a href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit_dosen">Edit</a>
                <a href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus_dosen">Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>