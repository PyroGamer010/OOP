<?php
function magStemmen($leeftijd) {
  // Controleer of $leeftijd een getal is
  if (!is_numeric($leeftijd)) {
    return false;
  }
  
  // Controleer of $leeftijd 18 of ouder is
  if ($leeftijd >= 18) {
    return true;
  } else {
    return false;
  }
}

$leeftijd1 = 17;
$leeftijd2 = 18;
$leeftijd3 = "dertien";

if (magStemmen($leeftijd1)) {
  echo "Je mag stemmen<br>";
} else {
  echo "Je mag niet stemmen<br>";
}

if (magStemmen($leeftijd2)) {
  echo "Je mag stemmen<br>";
} else {
  echo "Je mag niet stemmen<br>";
}

if (magStemmen($leeftijd3)) {
  echo "Je mag stemmen<br>";
} else {
  echo "Je mag niet stemmen<br>";
}
