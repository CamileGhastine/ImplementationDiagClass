<?php

namespace src\technician;


class setTechnician
{ 
    public function __construct(private string $name)
    {
    }

    public function getInfo(): string
    {
        return 'je suis ' . $this->getName();
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