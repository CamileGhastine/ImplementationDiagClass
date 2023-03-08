<?php

namespace src\vehicle;

use src\technician\Technician as Technician;

class Vehicle
{
    private ?Technician $technician = null;

    public function __construct(private string $numberPlate)
    {        
    }

    public function getInfos() : string
    {
        $info = 'Ma plaque d\'immatriculation est le ' . $this->getnumberPlate();
    
        if($this->technician) {
           $info . ' et mon technicien est ' . $this->technician->getName();
        }

        return $info . '.';
    }

    public function getnumberPlate(): string
    {
        return $this->numberPlate;
    }

    public function setnumberPlate(string $numberPlate): self
    {
        $this->numberPlate = $numberPlate;

        return $this;
    }

    public function getTechnician(): ?Technician
    {
        return $this->technician;
    }

    public function setTechnician(?Technician $technician): self
    {
        $this->technician = $technician;

        return $this;
    }
}
