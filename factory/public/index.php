<?php
require('../vendor/autoload.php');

use App\Factory\VehiculeFactory;

$car = VehiculeFactory::makeCar();
echo 'Cost per km: ' . $car->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $car->getFuelType() . "<br><br>";

$truck = VehiculeFactory::makeTruck();
echo 'Cost per km: ' . $truck->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $truck->getFuelType() . "<br><br>";

$bicycle = VehiculeFactory::makeBicycle();
echo 'Cost per km: ' . $bicycle->getCostPerKm() . "<br>";
echo 'Fuel type: ' . $bicycle->getFuelType() . "<br>";