<?php

namespace src\Vehicle;

use src\technician\Technician as Technician;

class vehicle
{
    private string $numberPlate;
    private array $technicians;

    public function __construct( string $numberPlate, array $technicians)
    {
        $this->setNumberPlate($numberPlate);
        $this->technicians = $technicians;
    }

    public function getInfo(): string
    {
        return 'Ma plaque d\'immatriculation est le ' . $this->getNumberPlate();
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

    public function getTechnicians(): array
    {
        return $this->technicians;
    }

    public function addTechnician(technician $technicians): self
    {
        // coder ici
        return $this;
    }

    public function removeTechnician(technician $technicians): self
    {
        //coder ici
        return $this;
    }
}