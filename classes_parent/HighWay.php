<?php
namespace App;
abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    

    protected function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }

    protected function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }
    protected function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles= $currentVehicles;
        return $this;
    }

    protected function getNbLane()
    {
        return $this->nbLane;
    }

    protected function setNbLane(int $nbLane)
    {
        $this->nbLane= $nbLane;
        return $this;
    }
    
    protected function getMaxSpeed()
    {
        return $this->maxSpeed; 
    }

    protected function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
    
    abstract public function addVehicle(Vehicle $vehicle);

    
    
}


/* implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicles, 
uniquement si ce dernier est autorisé sur ce type de voie. */