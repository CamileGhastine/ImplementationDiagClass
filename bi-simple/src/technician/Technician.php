<?php

namespace src\technician;

use src\vehicle\Vehicle as Vehicle;

class Technician
{
    private ?Vehicle $vehicle = null;

    public function __construct(private string $name)
    {        
    }

    public function getInfos() : string
    {
        $info = 'Je suis ' . $this->getName();

        if($this->getVehicle()) {
            $info .= ' et j\'entretiens le vehicule immatriulé ' . $this->getVehicle()->getnumberPlate();
        }

        return $info . '.';
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

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }
}
