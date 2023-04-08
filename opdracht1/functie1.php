<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function berekenKamer($lengte, $breedte, $hoogte = NULL)
{
    $berekening = 0;        

    if ($lengte > 0 && $breedte > 0 && $hoogte != NULL) {
        $berekening = $lengte * $breedte * $hoogte;
    } else {
        $berekening = $lengte * $breedte;
    }

    return $berekening;
}

$oppervlakte = berekenKamer(6, 2);
$inhoud = berekenKamer(4, 2, 2);

echo "oppervlakte is: $oppervlakte m2<br>";
echo "inhoud is: $inhoud m3<br>";