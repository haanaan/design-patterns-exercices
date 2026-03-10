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
echo 'Fuel type: ' . $bicycle->getFuelType() . "<br><br>";

$vehicule = VehiculeFactory::makeVehicule('truck');
echo 'Type demandé : \'truck\' → coût/km = ' . $vehicule->getCostPerKm() . '€, carburant = ' . $vehicule->getFuelType() . "<br><br>";

$v1 = VehiculeFactory::makeVehiculeFromNeeds(10, 5);
echo 'Distance = 10km, Poids = 5kg → coût/km = ' . $v1->getCostPerKm() . '€, carburant = ' . $v1->getFuelType() . ' (vélo)<br>';

$v2 = VehiculeFactory::makeVehiculeFromNeeds(30, 10);
echo 'Distance = 30km, Poids = 10kg → coût/km = ' . $v2->getCostPerKm() . '€, carburant = ' . $v2->getFuelType() . ' (voiture)<br>';

$v3 = VehiculeFactory::makeVehiculeFromNeeds(50, 300);
echo 'Distance = 50km, Poids = 300kg → coût/km = ' . $v3->getCostPerKm() . '€, carburant = ' . $v3->getFuelType() . ' (camion)<br>';