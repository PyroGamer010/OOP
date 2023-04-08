<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "auto.php";

$auto1 = new auto();
$auto2 = new auto();
$auto3 = new auto();

$auto1->merk = "Ford";
$auto1->type = "Fiesta";
$auto1->kleur = "Geel";
$auto1->heeftTrekhaak = true;
$auto1->kenteken = "1-ABC-123";
$auto1->kilometers = 169420;
$auto1->tankinhoud = 50;
$auto1->verbruik = 5.5;

$auto2->merk = "BMW";
$auto2->type = "M3";
$auto2->kleur = "Zwart";
$auto2->heeftTrekhaak = false;
$auto2->kenteken = "2-DEF-456";
$auto2->kilometers = 36420;
$auto2->tankinhoud = 60;
$auto2->verbruik = 8.0;

$auto3->merk = "BMW";
$auto3->type = "M5";
$auto3->kleur = "Blauw";
$auto3->heeftTrekhaak = false;
$auto3->kenteken = "2-FED-645";
$auto3->kilometers = 28369;
$auto3->tankinhoud = 70;
$auto3->verbruik = 9.0;


$auto1string  =        "De merk is " . $auto1->merk . " " . $auto1->type . " en hij is " . $auto1->kleur . " met de kenteken " . $auto1->kenteken; 
$auto1string  .=       ". De tankihoud daarvan is " . $auto1->tankinhoud . " liter en hij verbuikt " . $auto1->verbruik . " liter per 100 kilometer.";
$auto1string  .=       "De aantal gereden kilometers is " . $auto1->kilometers . "<br>";
echo $auto1string;

$auto2string  =        "De merk is " . $auto2->merk . " " . $auto2->type . " en hij is " . $auto2->kleur . " met de kenteken " . $auto2->kenteken; 
$auto2string  .=       ". De tankihoud daarvan is " . $auto2->tankinhoud . " liter en hij verbuikt " . $auto2->verbruik . " liter per 100 kilometer.";
$auto2string  .=       "De aantal gereden kilometers is " . $auto2->kilometers . "<br>";
echo $auto2string;

$auto3string  =        "De merk is " . $auto3->merk . " " . $auto3->type . " en hij is " . $auto3->kleur . " met de kenteken " . $auto3->kenteken; 
$auto3string  .=       ". De tankihoud daarvan is " . $auto3->tankinhoud . " liter en hij verbuikt " . $auto3->verbruik . " liter per 100 kilometer.";
$auto3string  .=       "De aantal gereden kilometers is " . $auto3->kilometers . "<br>";
echo $auto3string;