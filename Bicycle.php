<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
    
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
