<?php

namespace App\Factory;

use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Bicycle;

class VehiculeFactory
{
    public static function makeCar($costPerKm, $fuelType): Car
    {
        return new Car($costPerKm, $fuelType);
    }

    public static function makeTruck($costPerKm, $fuelType): Truck
    {
        return new Truck($costPerKm, $fuelType);
    }

    public static function makeBicycle($costPerKm, $fuelType): Bicycle
    {
        return new Bicycle($costPerKm, $fuelType);
    }
}
