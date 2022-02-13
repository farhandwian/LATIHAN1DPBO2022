<?php

    include "daftartim.php";

    $daftartim1 = new daftartim();
    $daftartim1->setNamaTim("MU");
    $daftartim1->setNegaraAsal("Inggris");
    $daftartim1->setTahun(1980);
    $daftartim1->setPemain("1. rooney, 
                            2. gigs, 
                            3. cavani,
                            4. Ronaldo, 
                            5. bruno hernandes, 
                            6. jadon sancho");

    $daftartim2 = new daftartim("Chelsea", "Inggris", 1905, "1. Kepa Arrizabalaga, 
                            2. Antonio Rüdiger, 
                            3. Marcos Alonso,
                            4. Andreas Christensen, 
                            5. Jorginho,
                            6. Thiago Silva");
    
    echo "Daftar Tim Sepak Bola" . "<br>";
    echo "<br>";
    echo "Nama Tim      : ". $daftartim1->getNamaTim() . "<br>";
    echo "Negara Asal   : ". $daftartim1->getNegaraAsal() . "<br>";
    echo "Tahun Berdiri : ". $daftartim1->getTahun() . "<br>";
    echo "Pemain        : ". $daftartim1->getPemain() . "<br>";
    
    echo "<br>";

    echo "Nama Tim      : ". $daftartim2->getNamaTim() . "<br>";
    echo "Negara Asal   : ". $daftartim2->getNegaraAsal() . "<br>";
    echo "Tahun Berdiri : ". $daftartim2->getTahun() . "<br>";
    echo "Pemain        : ". $daftartim2->getPemain() . "<br>";

?>