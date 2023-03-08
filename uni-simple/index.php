<?php

require('src/technician/Technician.php');
require('src/vehicle/Vehicle.php');

use src\technician\Technician as Technician;
use src\vehicle\Vehicle as Vehicle;

$technician = new Technician('Camile');
$vehicle = new Vehicle('123 ABC 91');
$vehicle->setTechnician($technician);

echo $technician->getInfos();
echo '<br>';
echo $vehicle->getInfos();
