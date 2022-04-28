<?php

require_once 'highway.php';

final class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck2 || $vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}