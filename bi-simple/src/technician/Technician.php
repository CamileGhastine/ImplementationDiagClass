<?php

namespace src\technician;

class Technician
{
    public function __construct(private string $name)
    {        
    }

    public function getInfos() : string
    {
        return 'Je suis ' . $this->getName() . '.';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
