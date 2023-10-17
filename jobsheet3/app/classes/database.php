<?php
    class database {
        var $host="localhost";
        var $username="root";
        var $password="";
        var $db="akademik";
        var $koneksi;
        var $hasil;

        function __construct () {
            $this->koneksi=mysqli_connect ($this->host, $this->username, $this->password, $this->db);
        }

        function tampil_mahasiswa (){
            $data = mysqli_query($this->koneksi, "select *from mahasiswa");
            while ($d = mysqli_fetch_array($data)) {
                $this->hasil[]=$d;
            }
            return $this->hasil;
        }

        function tambah_mhs ($nim, $nama, $alamat) {
            mysqli_query($this->koneksi,"insert into mahasiswa(nim, nama, alamat) values('$nim','$nama','$alamat')");
        }
    }
?>