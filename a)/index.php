<?php

include "DaftarMahasiswa.php";

$mahasiswa1 = new DaftarMahasiswa();
$mahasiswa1->setNim(2002969);
$mahasiswa1->setNama("Farhan Dwian");
$mahasiswa1->setGender("L");
$mahasiswa1->setProgramStudi("Ilkom");
$mahasiswa1->setSemester(4);

echo "Nama : ". $mahasiswa1->getNama()."<br>";
echo "NIM : ". $mahasiswa1->getNim()."<br>";
echo "Gender : ". $mahasiswa1->getGender()."<br>";
echo "Program Studi : ". $mahasiswa1->getProgramStudi()."<br>";
echo "Semester : ". $mahasiswa1->getSemester()."<br>";