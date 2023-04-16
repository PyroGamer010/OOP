<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "auto.php";

$auto = new auto();
$auto->merk = "Ford";
$auto->type = "Fiesta";
$auto->kleur = "Geel";
$auto->heeftTrekhaak = true;
$auto->kenteken = "1-ABC-123";
$auto->kilometers = 169420;
$auto->tankinhoud = 50;
$auto->verbruik = 5.5;

$auto1string  =        "De merk is " . $auto->merk . " " . $auto->type . " en hij is " . $auto->kleur . " met de kenteken " . $auto->kenteken; 
$auto1string  .=       ". De tankihoud daarvan is " . $auto->tankinhoud . " liter en hij verbuikt " . $auto->verbruik . " liter per 100 kilometer.";
$auto1string  .=       " De aantal gereden kilometers is " . $auto->kilometers . "<br><br>";
echo $auto1string;

echo "Ik tank 20 liters: " . $auto->tanken(20);
echo "<br/>Ik rij honderd kilometers: " . $auto->rijden(100) . "<br/>";
echo "De bezine is nu: " . $auto->benzine;
echo "<br/>De kilometerstand is nu: " . $auto->kilometers;