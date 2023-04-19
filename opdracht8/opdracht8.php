<?php
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