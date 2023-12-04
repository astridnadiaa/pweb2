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

<div class="px-5 py-5">
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
    <?php
        foreach ($db->edit($_GET['id']) as $d) {
    ?>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="hidden" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" name="nim" value="<?php echo $d['nim']?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']?>">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']?>">
  </div>
  <table>
     <tr>
        <td></td>
        <td><input class="btn btn-success mb-3 mt-2" type="submit" value="Simpan" onclick="showAlert()"></td>
    </tr>
  </table>
  <?php
    }
    ?>
</form>
<script>
    function showAlert() {
      alert ("Data Mahasiswa berhasil diperbarui")
    }
  </script>
</div>