<?php 
require_once 'Vehicle.php';

class Truck2 extends Vehicle
{
    private int $storageCapacity;
    private int $load = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct( $color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void{
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoad(): int{
        return $this->load;
    }

    public function setLoad(int $load): void{
        $this->load = $load;
   }

    public function isItFull(): string
    {
        $sentence = "";
        while ($this->load < $this->storageCapacity) {
        $this->load++;
        $sentence .= "in filling !!";
    }
        $sentence .= "full !!";
        return $sentence;
    }
}