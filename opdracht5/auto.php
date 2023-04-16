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
  
  public function tanken(float $liters)
    {
        $this->benzine += $liters;
        if ($this->benzine > $this->tankinhoud) {
            $teveel = $this->benzine - $this->tankinhoud;
            $this->benzine = $this->tankinhoud;
            return $teveel;
        }
        return 0;
    }
    public function rijden(float $kilometers)
    {
        $verbruikt = ($this->verbruik * $kilometers) / 100;
        if ($verbruikt < $this->benzine) {
            $this->benzine -= $verbruikt;
            $this->kilometers += $kilometers;
            return $kilometers;
        }
        $kilometers = ($this->benzine / 100) * $verbruikt;
        $this->kilometers += $kilometers;
        $this->benzine = 0;
        return $kilometers;
    }
  
}