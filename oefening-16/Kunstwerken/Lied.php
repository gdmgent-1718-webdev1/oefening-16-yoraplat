<?php

namespace Kunstwerken;

class Lied extends KunstwerkenAbstract implements DuurInterface
{
    public $duur;

    public function getDuur(): ?string{
        return $this->duur;
    }

    public function setDuur($duur): void{
        $this->duur = $duur;
    }
}