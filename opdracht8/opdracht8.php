<?php
// include "auto.php";

// $auto = new auto("Ford", "Fiesta", "Geel", true, "1-ABC-123", 169420, 50, 0, 5.5);

// $auto1string  =        "De merk is " . $auto->merk . " " . $auto->type . " en hij is " . $auto->kleur . " met de kenteken " . $auto->getKenteken(); 
// $auto1string  .=       ". De tankihoud daarvan is " . $auto->tankinhoud . " liter en hij verbuikt " . $auto->verbruik . " liter per 100 kilometer.";
// $auto1string  .=       " De aantal gereden kilometers is " . $auto->kilometerstand() . "<br><br>";
// echo $auto1string;

// echo "Ik tank 20 liters: " . $auto->tanken(20);
// echo "<br/>Ik rij honderd kilometers: " . $auto->rijden(100) . "<br/>";
// echo "De bezine is nu: " . $auto->benzinepeil();
// echo "<br/>De kilometerstand is nu: " . $auto->kilometerstand();
// echo "<br/>Het kenteken is: " . $auto->getKenteken();

require_once "auto.php";
require_once "leaseAuto.php";
require_once "eigenAuto.php";

$mijnAuto = new EigenAuto(time(), "Ford", "Fiesta", "Geel", true, "1-ABC-123", 169420, 50, 0, 5.5);

echo "Aankoop datum : " . date("d m Y", $mijnAuto->aankoopdatum);

$leaseAuto = new LeaseAuto("LeasePlan", time(), time() + 31536000, "Ford", "Fiesta", "Geel", true, "1-ABC-123", 169420, 50, 0, 5.5);
echo " De lease maatschappij: " . $leaseAuto->leaseMaatschappij;
echo "<br/>Start datum:" . date("d m Y", $leaseAuto->start_contract);
echo "<br/>Eind datum:" . date("d m Y", $leaseAuto->eind_contract);
echo "<br/>Laatste onderhoud datum van mijn lease auto is:" . date("d m Y", $leaseAuto->laatste_onderhoud);
echo "<br/>Ik doe onderhoud aan mijn lease auto: " . $leaseAuto->doeOnderhoud(time());
echo "<br/>De laatste onderhoud datum van mijn lease auto is: " . date("d m Y", $leaseAuto->laatste_onderhoud);