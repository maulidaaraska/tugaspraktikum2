<?php
require('Siswa.php');
Class SiswaRpl extends Siswa{
    var $JudulLap;
    function __construct(){
        parent::__construct();
        $this->JudulLap = "Laporan Prakerin";
    }

    function JudulLaporan($judul){
        $this->JudulLap=$judul;
    }

    function CetakData(){
        echo"NIS Siswa ".$this->nis."</br>";
        echo"Nama Siswa ".$this->nama."</br>";
        echo"Tahun Lahir Siswa ".$this->tahun."</br>";
        echo"Kota Asal Siswa ".$this->kota."</br>";
        echo"Umur Siswa ".$this->HitungUmur()."</br>";
        echo"Judul Laporan Siswa ".$this->JudulLap."</br>";
    }
    }
?>