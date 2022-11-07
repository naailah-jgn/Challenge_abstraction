<?php

namespace App;
final class MotorWay extends HighWay
{

    protected function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }
    public function addVehicle(Car $car): string {
    if ($car instanceof Car) {
        return $this->currentVehicles[] = $car;
    } else {
        return "Vehicle not authorized";
    }
    
    }   
    
   
}





