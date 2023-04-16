<?php
include "auto.php";

$auto = new auto("Ford", "Fiesta", "Geel", true, "1-ABC-123", 169420, 50, 0, 5.5);

$auto1string  =        "De merk is " . $auto->merk . " " . $auto->type . " en hij is " . $auto->kleur . " met de kenteken " . $auto->getKenteken(); 
$auto1string  .=       ". De tankihoud daarvan is " . $auto->tankinhoud . " liter en hij verbuikt " . $auto->verbruik . " liter per 100 kilometer.";
$auto1string  .=       " De aantal gereden kilometers is " . $auto->kilometerstand() . "<br><br>";
echo $auto1string;

echo "Ik tank 20 liters: " . $auto->tanken(20);
echo "<br/>Ik rij honderd kilometers: " . $auto->rijden(100) . "<br/>";
echo "De bezine is nu: " . $auto->benzinepeil();
echo "<br/>De kilometerstand is nu: " . $auto->kilometerstand();
echo "<br/>Het kenteken is: " . $auto->getKenteken();