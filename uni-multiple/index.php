<?php

require('src/technician/Technician.php');
require('src/vehicle/Vehicle.php');

use src\technician\Technician as Technician;
use src\Vehicle\Vehicle as Vehicle;

$technician1 = new Technician('camile');
$technician2 = new Technician(('Roger'));

$vehicle = new Vehicle('123AAA91', [$technician1, $technician2]);

echo $technician1->getInfo();
echo "<br>";
echo $vehicle->getInfo();