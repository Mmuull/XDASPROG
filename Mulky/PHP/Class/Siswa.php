<?php
    class siswa
    {
        public $no_siswa;
        public $nama_siswa;
        public $usia_siswa;

        public function perkenalan(){
            return "Perkenalkan nama saya $this->nama_siswa, dengan nomor urut $this->no_siswa.";
        }
    }
?>