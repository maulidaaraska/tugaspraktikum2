<?php
require('Form.php');
Class Siswa{
    var $nis;
    var $nama;
    protected $tahun;
    public $kota;

    //function __construct(){
        //$this->nis="K4131";
        //$this->nama="Maulida";
        //$this->tahun="2006";
        //$this->kota="Bogor";
        //$this->CetakData();
    //}

    function IsiData($nis,$nama,$tahun,$kota){
        $this->nis=$nis;
        $this->nama=$nama;
        $this->tahun=$tahun;
        $this->kota=$kota;
    }

    public function CetakData(){
        echo"NIS Siswa ".$this->nis."</br>";
        echo"Nama Siswa ".$this->nama."</br>";
        echo"Tahun Lahir Siswa ".$this->tahun."</br>";
        echo"Kota Asal Siswa ".$this->kota."</br>";
        echo"Umur Siswa ".$this->HitungUmur()."</br>";
    }

    public function HitungUmur(){
        $umur=date('Y') - $this->tahun;
        return $umur;
    }
}

    public function InputForm(){
        $formSiswa=new Form('','Input Siswa');
        $formSiswa->AddField('nis','NIS Siswa');
        $formSiswa->AddField('nama','Nama Siswa');
        $formSiswa->AddField('tahun','Tahun Lahir Siswa');
        $formSiswa->AddField('kota','Kota Asal Siswa');
        $formSiswa->DisplayForm();
    }
?>