<?php

namespace Kunstwerken;

class Dans extends KunstwerkenAbstract implements AfbeeldingInterface
{
    public $afbeelding;

    public function getAfbeelding(): ?string{
        return $this->afbeelding;
    }

    public function setAfbeelding($afbeelding): void{
        $this->afbeelding = $afbeelding;
    }
}