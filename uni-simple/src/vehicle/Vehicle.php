<?php

namespace src\vehicle;

use src\technician\Technician as Technician;
 

Class Vehicle
{
    private string $numberPlate;
    private ?Technician $technician = null;

    public function __construct(string $numberPlate)
    {
        $this->setNumberPlate($numberPlate);
    }

    public function getInfos(): string
    {
        return 'Ma plaque d\'immatriculation est ' . $this->getNumberPlate() .'. Et ' . $this->getTechnician()->getName() . ' s\'occupe de mon entretien.';
    }

    public function getNumberPlate(): string
    {
        return $this->numberPlate;
    }

    public function setNumberPlate(string $numberPlate): self
    {
        $this->numberPlate = $numberPlate;

        return $this;
    }

    public function getTechnician(): Technician
    {
        return $this->technician;
    }

    public function setTechnician(Technician $technician): self
    {
        $this->technician = $technician;

        return $this;
    }
}