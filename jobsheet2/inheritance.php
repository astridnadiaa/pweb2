<?php
    // class manusia
    class manusia {

        public $nama_saya;
        protected $alamat;
        private $tanggal_lahir="Cilacap, 21 Agustus 2004";


        function panggil_nama ($saya){
            $this->nama_saya=$saya;
        }
        public function getTTL ($ttl) {
            return $this->tanggal_lahir;
        }
        

    }
    // class turunan atau subclass manusia
    class mahasiswa extends manusia {

        public $nama_mahasiswa;

        function panggil_mahasiswa ($mahasiswa) {
            $this->nama_mahasiswa=$mahasiswa;
        }
        function panggil_alamat ($Alamat){
            return $Alamat;
        }
    }



    // instansiasi class mahasiswa
    $informatika = new mahasiswa();

    $informatika->panggil_nama("Astrid Nadia");
    $informatika->panggil_mahasiswa("Ayu Kartikasari");

    // tampilkan isi property
    echo "Nama Depan Saya : ".$informatika->nama_saya."</br>";
    echo "Nama Belakang Saya : ".$informatika->nama_mahasiswa."<br></br>";
    echo "Alamat : ".$informatika->panggil_alamat("Jalan Mawar No 16")."<br></br>";
    echo "Tempat Tanggal Lahir : ".$informatika->getTTL()."<br></br>";

?>