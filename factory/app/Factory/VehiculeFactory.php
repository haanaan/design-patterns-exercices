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

    public static function makeVehicule(string $type): Vehicule
    {
        return match ($type) {
            'car' => self::makeCar(),
            'truck' => self::makeTruck(),
            'bicycle' => self::makeBicycle(),
            default => throw new \InvalidArgumentException("Type de véhicule inconnu : $type"),
        };
    }

    public static function makeVehiculeFromNeeds(int $distance, int $weight): Vehicule
    {
        if ($weight > 200) {
            return self::makeTruck();
        }

        if ($weight > 20 || $distance >= 20) {
            return self::makeCar();
        }

        return self::makeBicycle();
    }

}
