<?php

namespace src\Vehicle;

use src\technician\Technician as Technician;

class vehicle
{
    private array $technicians = [];

    public function __construct(private string $numberPlate, array $technicians)
    {
        $this->setTechnicians($technicians);
    }

    public function getInfo(): string
    {
        $info = 'Ma plaque d\'immatriculation est le ' . $this->getNumberPlate() . '. Les techniciens qui m\'entretiennent sont : ';
        foreach($this->technicians as $techinician) {
            $info .= $techinician->getName() . ', ';
        }

        $info = substr($info, 0, -2);
    
        return $info . '.';
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

    public function addTechnician(technician $technician): bool
    {
        if(!in_array($technician, $this->technicians, true)) {
            $this->technicians[] = $technician;

            return true;
        }
      
        return false;
    }

    public function removeTechnician(technician $technician): bool
    {
        $key = array_search($technician, $this->technicians, true);

        if($key) {
            unset($this->technicians[$key]);

            return true;
        }

        return false;
    }

    private function setTechnicians(array $technicians)
    {
        foreach($technicians as $technician) {
            $this->addTechnician($technician);
        }
    }
}
