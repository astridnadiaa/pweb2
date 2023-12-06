<?php
    include_once '../../config.php';
    include_once '../../controllers/DokterController.php';
    require '../../index.php';
?>
<div class="px-5 py-15">
<h3>Tambah Data Dokter</h3>
<form action="simpan_tambahdoc" method="post">
    <div class="mb-3">
        <label for="nama_dokter" class="form-label">Nama Dokter</label>
        <input name="nama_dokter" type="text" class="form-control" id="" >
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
