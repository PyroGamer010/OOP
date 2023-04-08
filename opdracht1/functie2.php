<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function nlDatum($datum, $kort_jaar = false) {
    $maanden = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
    $datum = date("d-m-Y", strtotime($datum));
    $datum_parts = explode("-", $datum);
    $jaar = $kort_jaar ? substr($datum_parts[2], 2) : $datum_parts[2];
    return $datum_parts[0] . " " . $maanden[intval($datum_parts[1]) - 1] . " " . $jaar;
}
  

$datum = "1974-05-14";
$nl_datum = nlDatum($datum, true);
echo $nl_datum . "<br>"; // "14 mei 74"

$datum = "1974-05-14";
$nl_datum = nlDatum($datum);
echo $nl_datum; // "14 mei 1974"