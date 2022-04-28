<?php

require_once 'highway.php';

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck2) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}