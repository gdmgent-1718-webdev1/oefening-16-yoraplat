<?php

namespace Kunstwerken;

class Gedicht extends KunstwerkenAbstract implements WoordenInterface
{
    public $woorden;
    
    public function getWoorden(): ?string{
        return $this->woorden;
    }

    public function setWoorden($woorden): void{
        $this->woorden = $woorden;
    }
}