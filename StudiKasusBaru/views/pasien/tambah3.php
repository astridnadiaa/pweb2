<?php
  require '../../index.php';
?>
<h3>Tambah Data Pasien</h3>
<form action="simpan_tambahpas" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="no_hp"></td>
        </tr>
        <tr>
            <td>Penyakit</td>
            <td><input type="text" name="penyakit"></td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td><input type="text" name="keluhan"></td>
        </tr>
        <tr>
        <tr>
            <td></td>value=
            <td><input class="btn btn-success mb-3 mt-2" type="submit" name="submit" "Simpan" onclick="showAlert()"></td>
            </tr>
        </tr>
    </table>
</form>

  <script>
    function showAlert() {
      alert ("Data Pasien berhasil ditambahkan")
    }
  </script>
</div>
