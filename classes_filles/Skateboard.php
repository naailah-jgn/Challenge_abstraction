<?php
final class Skateboard extends Vehicle
{
    protected function __construct(int $nbWheels = 4)
    {
        $this->nbWheels= $nbWheels;
    }
}