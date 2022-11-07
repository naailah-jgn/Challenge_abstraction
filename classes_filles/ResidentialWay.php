<?php 
namespace App;

final class ResidentialWay extends HighWay
{
    protected function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }
    public function addVehicle(Vehicle $vehicle) {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
        
    }
}





