<?php

require('src/technician/Technician.php');
require('src/vehicle/Vehicle.php');

use src\technician\Technician as Technician;
use src\vehicle\Vehicle;

$technician1 = new Technician('Camile');
$technician2 = new Technician('Roger');

$vehicle = new Vehicle('133AAA91');
$vehicle->setTechnician($technician1);
echo $vehicle->getInfos();
echo '<br>';
echo $technician1->getInfos();
echo '<br>';
echo $technician2->getInfos();
echo '<br>';
echo '<br>';

$vehicle->setTechnician($technician2);
echo $vehicle->getInfos();
echo '<br>';
echo $technician1->getInfos();
echo '<br>';
echo $technician2->getInfos();

