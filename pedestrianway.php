<?php

require_once 'highway.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}