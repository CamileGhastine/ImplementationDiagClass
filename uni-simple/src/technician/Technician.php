<?php

namespace src\technician;

class Technician
{
    private string $name;

    public function __construct(string $name)
    {
        $this->setName($name);
    }


    public function getInfos(): string
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