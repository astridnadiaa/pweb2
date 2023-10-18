<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-5 py-5">
<h3>Tambah Data Dosen</h3>
<form action="proses_dosen.php?aksi=tambah_dosen" method="post">
  <div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="text" class="form-control" name="nip">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <table>
     <tr>
        <td></td>
        <td><input class="btn btn-success mb-3 mt-2" type="submit" value="Simpan" onclick="showAlert()"></td>
    </tr>
  </table>
</form>
<script>
    function showAlert() {
      alert ("Data Dosen berhasil ditambahkan")
    }
  </script>
</div>
