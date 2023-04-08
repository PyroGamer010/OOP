<?php
class auto 
{
  public $merk;
  public $type;
  public $kleur;
  public $heeftTrekhaak = false;
  public $kenteken;
  public $kilometers = 0;
  public $tankinhoud;
  public $benzine = 0;
  public $verbruik;
  
  public function tanken($liters) {
    $this->benzine += $liters;
    if ($this->benzine > $this->tankinhoud) {
      $this->benzine = $this->tankinhoud;
    }
  }

  public function rijden($kilometers) {
    $verbruik = ($this->verbruik * $kilometers) / 100;
    if ($this->benzine >= $verbruik) {
      $this->kilometers += $kilometers;
      $this->benzine -= $verbruik;
      return $kilometers;
    } else {
      $kilometers_gereden = ($this->benzine * 100) / $this->verbruik;
      $this->kilometers += $kilometers_gereden;
      $this->benzine = 0;
      return $kilometers_gereden;
    }
  }
}