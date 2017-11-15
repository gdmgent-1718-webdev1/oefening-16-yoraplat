<?php

namespace Kunstwerken;

class Boek extends KunstwerkenAbstract implements BladzijdenInterface, WoordenInterface
{
    public $bladzijden;

    public function getBladzijden(): ?string{
        return $this->bladzijden;
    }

    public function setBladzijden($bladzijden): void{
        $this->bladzijden = $bladzijden;
    }

    public $woorden;
    
    public function getWoorden(): ?string{
        return $this->woorden;
    }

    public function setWoorden($woorden): void{
        $this->woorden = $woorden;
    }
}