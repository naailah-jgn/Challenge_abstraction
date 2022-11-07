<?php 
namespace App;

final class PedestrianWay extends HighWay
{
    protected function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }

    public function addVehicle(Bike $bike, Skateboard $skateboard): array {
        if ($bike instanceof Bike) {
            return $this->currentVehicles[] = $bike;
        } else if ($skateboard instanceof Skateboard) {
            return $this->currentVehicles[] = $skateboard;
        }else{ 
            return "Vehicle not authorized";
        }
        
        }   
}






