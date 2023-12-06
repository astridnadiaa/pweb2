<?php
    include_once '../../config.php';
    include_once '../../controllers/DokterController.php';
    require '../../index.php';
?>
<h3>Tambah Data Dokter</h3>
<form action="simpan_tambahdoc" method="post">
    <table>
            <td>Nama</td>
            <td><input type="text" name="nama_dokter"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-success mb-3 mt-2" type="submit" name="submit" value="Simpan"></td>
            </tr>
        </tr>
    </table>
</form>

  <script>
    function showAlert() {
      alert ("Data Dokter berhasil ditambahkan")
    }
  </script>
</div>
