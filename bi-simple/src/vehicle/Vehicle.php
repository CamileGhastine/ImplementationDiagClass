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

        if($this->getTechnician()) {
           $info .= ' et mon technicien est ' . $this->getTechnician()->getName();
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
        if($technician) {
           $technician->setVehicle($this); 
        }

        if($this->getTechnician()) {
            $this->getTechnician()->setVehicle(null);
        }
        
        $this->technician = $technician;

        return $this;
    }
}
