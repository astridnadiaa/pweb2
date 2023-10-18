<?php
    include '../classes/database.php';
    $db = new database;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h3>Edit Data Dosen</h3>
<form action="proses_dosen.php?aksi=update_dosen" method="post">
<?php
    foreach ($db->edit_dosen($_GET['id']) as $d) {
?>
        <table>
            <tr>
                <td>NIP</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']?>">
                    <input type="text" name="nip" value="<?php echo $d['nip']?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="" cols="30" rows="5" ><?php echo $d['alamat']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success mb-3 mt-2" type="submit" value="Simpan"></td>
            </tr>
        </table>
    <?php
    }
    ?>
</form>