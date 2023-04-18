<?php
class EigenAuto extends Auto
{
    public int $aankoopdatum;
    public function __construct(int $aankoopdatum, string $merk, string $type, string $kleur,  bool $heeftTrekhaak = false, string $kenteken, float $kilometers = 0, float $tankInhoud, float $benzine = 0, float $verbruik)
    {
        $this->aankoopdatum = $aankoopdatum;
        parent::__construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankInhoud, $benzine, $verbruik);
    }
}