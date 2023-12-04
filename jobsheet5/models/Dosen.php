<?php
  
  class Dosen {
    private $koneksi;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllDosen(){
        $query = "SELECT *FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nip, $nama, $alamat){
      $query = "INSERT INTO dosen ($nip, $nama, $alamat) 
      VALUES ('$nip', '$nama', '$alamat')";
      
      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function getDosenById($id) {
      $query = "SELECT *FROM dosen where id=$id";
      $result = mysqli_query($this->koneksi, $query);
      return mysqli_fetch_assoc($result);
    }
    
    public function updateDosen($nip, $nama, $alamat) {
      $query = "UPDATE dosen set nip='$nip', nama='$nama', alamat='$alamat' where id='$id'";

      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function deleteDosen($id) {
      $query ="DELETE FROM dosen WHERE id=$id";
      $result = mysqli_query($this->koneksi, $query);
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
  }
?>