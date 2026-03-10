<?php
require('../vendor/autoload.php');

use App\Factory\VehiculeFactory;

$car = VehiculeFactory::makeCar(0.5, 'essence');
echo 'Cost per km: ' . $car->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $car->getFuelType() . "<br><br>";

$truck = VehiculeFactory::makeTruck(1.2, 'diesel');
echo 'Cost per km: ' . $truck->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $truck->getFuelType() . "<br><br>";

$bicycle = VehiculeFactory::makeBicycle(0, 'none');
echo 'Cost per km: ' . $bicycle->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $bicycle->getFuelType() . "<br>";