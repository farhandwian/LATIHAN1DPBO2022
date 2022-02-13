<?php

class DaftarMahasiswa
{
    private $nama = "";
    private $nim = 0;
    private $gender = "";
    private $programstudi = "";
    private $semester = 0;

    public function __construct($nama = "",$nim = 0, $gender = "", $programstudi = "", $semester = 0)
    {
        $this->nama = $nama;
	$this->nim = $nim;
        $this->gender = $gender;
        $this->programstudi = $programstudi;
        $this->semester = $semester;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setProgramStudi($programstudi)
    {
        $this->programstudi = $programstudi;
    }

    public function getProgramStudi()
    {
        return $this->programstudi;
    }

    public function setSemester($semester)
    {
        $this->semester = $semester;
    }

    public function getSemester()
    {
        return $this->semester;
    }
}