<?php
    // membuat class
    class mahasiswa {
    // menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    
    // construct (yang dibaca pertama kali)
    function __construct() {
        echo "Saya Mahasiswa Teknik Informatika </br>";
    }

    // destruct (yang dibaca paling terakhir)
    function __destruct () {
        echo "<br> Politeknik Negeri Cilacap";
    }

     // method untuk menampilkan nama
     function tampil_nama (){
        // isi method
        return "Nama saya adalah Astrid </br>";
     }

     // method untuk menampilkan alamat
     function tampil_alamat (){
        // isi method
        return "Alamat rumah saya di jalan Mawar No 16";
     }

     // method tampil_mahasiswa
     function tampil_mahasiswa() {
        return "<br> Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah.";
     }
    }

    // tugas membuat class dosen
    class dosen {
        var $nama_dosen;
        var $nidn;
        var $prodi;

        function tampil_dosen () {
            return "Nama saya adalah Astrid </br>";
        }
        function tampil_nidn (){
            return "NIDN : 220302078 </br>";
        }
        function tampil_prodi (){
            return "Saya dari Prodi D3 - Teknik Informatika";
        }
    }

    // membuat objek nama mahasiswa
    $nama_mahasiswa = new mahasiswa();
    $namaDosen = new dosen ();

    // menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama();
    echo $nama_mahasiswa->tampil_alamat();
    echo $nama_mahasiswa->tampil_mahasiswa();
    echo "<br></br>";
    echo $namaDosen->tampil_dosen();
    echo $namaDosen->tampil_nidn();
    echo $namaDosen->tampil_prodi();

?>