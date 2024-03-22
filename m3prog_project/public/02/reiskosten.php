<?php

// hoeveel km kan je met een tank rijden
$tankInhoudInL = 50;
$aantalKmPerL = 15;
$Euro95 = 1.89;
$afstand = 1087;
$treinkaart =  60;

$kmPerTank = $tankInhoudInL * $aantalKmPerL;
$aantalKeerTanken = $afstand / $kmPerTank;
$tankenAfgerond = ceil($aantalKeerTanken);
$hoeveelLBezine = $afstand / $aantalKmPerL;

echo "je moet {$tankenAfgerond} keer tanken <br>";
echo "zoveel liter bezinen ver bruik je {$hoeveelLBezine}<br>";
echo "dit is de afstand {$afstand} <br>";

$bedragTank = $tankenAfgerond * $tankInhoudInL * $Euro95;
echo "je moet {$bedragTank} euro betalen aan het tanken <br>";

if ($treinkaart < $bedragTank ){

echo "ik ga met de trein <br>";
}else{

echo "ik ga met de auto <br>";
}


