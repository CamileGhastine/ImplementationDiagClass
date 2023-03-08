<?php

require('src/technician/Technician.php');
require('src/vehicle/Vehicle.php');

use src\technician\Technician as Technician;
use src\vehicle\Vehicle;

$technician = new Technician('Camile');

$vehicle = new Vehicle('133AAA91');
$vehicle->setTechnician($technician);


echo $technician->getInfos();
echo '<br>';
echo $vehicle->getInfos();

