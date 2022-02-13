<?php

class daftartim{

#nama tim, negara asal tim, tahun berdiri tim, serta pemain
    private $NamaTim = "";
    private $NegaraAsal = "";
    private $Tahun = 0;
    private $Pemain = "";

    public function __construct($NamaTim="", $NegaraAsal="", $Tahun=0, $Pemain=""){
        $this->NamaTim=$NamaTim;
        $this->NegaraAsal=$NegaraAsal;
        $this->Tahun=$Tahun;
        $this->Pemain=$Pemain;
    }

    public function setNamaTim($NamaTim){
        $this->NamaTim=$NamaTim;
    }
    public function getNamaTim(){
        return $this->NamaTim;
    }

    public function setNegaraAsal($NegaraAsal){
        $this->NegaraAsal=$NegaraAsal;
    }
    public function getNegaraAsal(){
        return $this->NegaraAsal;
    }

    public function setTahun($Tahun){
        $this->Tahun=$Tahun;
    }
    public function getTahun(){
        return $this->Tahun;
    }

    public function setPemain($Pemain){
        $this->Pemain=$Pemain;
    }
    public function getPemain(){
        return $this->Pemain;
    }

    function __destruct(){

    }
}

?>