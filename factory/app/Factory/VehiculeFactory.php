<?php

namespace App\Factory;

use App\Entity\Vehicule;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Bicycle;

class VehiculeFactory
{
    public static function makeCar(): Car
    {
        return new Car(0.5, 'essence');
    }

    public static function makeTruck(): Truck
    {
        return new Truck(1.2, 'diesel');
    }

    public static function makeBicycle(): Bicycle
    {
        return new Bicycle(0, 'none');
    }
}
