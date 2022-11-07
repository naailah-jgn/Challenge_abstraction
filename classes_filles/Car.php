<?php
require_once '../classes filles/MotorWay.php';
final class Car extends Vehicle
{
    protected function __construct(int $nbSeats = 4, int $nbWheels = 4)
    {
        $this->nbSeats = $nbSeats;
        $this->nbWheels= $nbWheels;
    }
    public function currentVehicle(Car $car): string {
        return $this->currentVehicle($car);
    }
    
}