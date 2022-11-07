<?php
final class Bike extends Vehicle
{
    protected function __construct(int $nbSeats = 1, int $nbWheels = 2)
    {
        $this->nbSeats = $nbSeats;
        $this->nbWheels= $nbWheels;
    }
}