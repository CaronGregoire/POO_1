<?php

class Car
{
    private string $color;
    private int $currentSpeed = 0;
    private int $nbSeats = 4;
    private int $nbWheels = 4;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color,int $nbSeat, string $energy){
        $this->color = $color;
        $this->nbSeat= $nbSeat;
        $this->energy= $energy;
    }

    public function start(): string
    {
            return "Let's GO";
    }
    public function forward(): string
    {
        $this->currentSpeed = 20;

        return "Go Go Go !";
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
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}