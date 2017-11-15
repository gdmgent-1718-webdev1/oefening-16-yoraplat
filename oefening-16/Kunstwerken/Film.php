<?php

namespace Kunstwerken;

class Film extends KunstwerkenAbstract implements DuurInterface
{
    public $duur;

    public function getDuur(): ?string{
        return $this->duur;
    }

    public function setDuur($duur): void{
        $this->duur = $duur;
    }

    public $afbeelding;
    
        public function getAfbeelding(): ?string{
            return $this->afbeelding;
        }
    
        public function setAfbeelding($afbeelding): void{
            $this->afbeelding = $afbeelding;
        }
}