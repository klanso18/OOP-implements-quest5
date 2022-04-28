<?php 

// Les classes définies comme abstraites ne peuvent pas être instanciées. Si une méthode est définie comme abstraite, toute la classe  doit l'être. 
abstract class HighWay 
{
    private array $currentVehicles;

    protected int $nbLane;

    protected int $maxSpeed; 

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed= $maxSpeed;
    }


    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles($currentVehicles): self
    {
        $this->currentVehicles[] = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane): self
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
    
}
