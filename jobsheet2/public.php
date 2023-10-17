<?php
    // membuat class mahasiswa 
    class mahasiswa {

        // property public dan private
        public $nama;
        private $nim = "220302078"; 

        // public method 
        public function tampilkan_nama () {
            //nilai kembalian 
            return "Nama saya Astrid </br>";
        }

        // protected method
        function tampilkan_nim (){
            return "NIM saya ". $this->nim;
        }
    }

    // instansi objek mahasiswa kedalam variable $mahasiswa 
    $mahasiswa = new mahasiswa();
    $nim = new mahasiswa ();

    // memanggil method tampilkan_nama
    echo $mahasiswa->tampilkan_nama();
    echo $nim->tampilkan_nim();
?>