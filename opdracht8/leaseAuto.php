<?php
class LeaseAuto extends Auto
{
    public string $leaseMaatschappij;
    public int $start_contract;
    public int $eind_contract;
    private int $laatste_onderhoud;
    
    public function __construct(string $leaseMaatschappij, int $start_contract, int $eind_contract, string $merk, string $type, string $kleur, bool $heeftTrekhaak = false, string $kenteken, float $kilometers = 0, float $tankInhoud, float $benzine = 0, float $verbruik)
    {
        $this->leaseMaatschappij = $leaseMaatschappij;
        $this->start_contract = $start_contract;
        $this->eind_contract = $eind_contract;
        parent::__construct($merk, $type, $kleur, $heeftTrekhaak, $kenteken, $kilometers, $tankInhoud, $benzine, $verbruik);
    }
    public function doeOnderhoud(int $datum = null): void
    {
        if($datum == null) {
            $datum = time();
        }
        $this->laatste_onderhoud = $datum;
    }
}