<?php

namespace Kunstwerken;

class Beeldhouwerk extends KunstwerkenAbstract implements AfbeeldingInterface, GewichtInterface
{
    public $afbeelding;

    public function getAfbeelding(): ?string{
        return $this->afbeelding;
    }

    public function setAfbeelding($afbeelding): void{
        $this->afbeelding = $afbeelding;
    }

    public $gewicht;
    
        public function getGewicht(): ?string{
            return $this->gewicht;
        }
    
        public function setGewicht($gewicht): void{
            $this->gewicht = $gewicht;
        }
}