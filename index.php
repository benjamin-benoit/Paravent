<?php

// Function to check if altitudes are between 0 and 100 000
function checkAltitude($arrAlt)
{
	for ($i = 0; $i < count($arrAlt); $i++) {
        if($arrAlt[$i] < 0 || $arrAlt[$i] > 100000) {
            return false;
        }
    }
    return true;
}

// First input
$continent = 0;
$array;
while($continent < 1 || $continent > 100000) {
    $continent = (int)readline('Quel est la largeur du continent: ');
    if ($continent < 1 || $continent > 100000) {
        echo("Entrez une valeur entre 1 et 100 000\n");
    }
}

// Second input
$altitudeTxt;
$altitudeArr;
do {
    $altitudeTxt = readline("Entrez $continent valeurs d'altitude (entre 0 et 100 000): ");
    $altitudeArr = explode(" ", $altitudeTxt);
} while(!checkAltitude($altitudeArr) || count($altitudeArr) != $continent);

// Result calculation and print
$maxAlt = $altitudeArr[0];
$availableSurf = 0;
for ($i = 0; $i < count($altitudeArr); $i++) {
    if ($altitudeArr[$i] < $maxAlt) {
        $availableSurf++;
    } else if ($altitudeArr[$i] > $maxAlt) {
        $maxAlt = $altitudeArr[$i];
    }
}

echo("Surface d'abri disponible: $availableSurf\n");
?>