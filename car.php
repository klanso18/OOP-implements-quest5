<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

  
    public function setParkBrake(bool $hasParkBrake)
    {
        return !$this->hasParkBrake;
    }

    public function start(): void
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Ma voiture ne peut pas avancer');
        };
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
