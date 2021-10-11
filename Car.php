<?php

class Car
{
    private string $color;
    private int $currentSpeed = 0;
    private int $nbSeat = 4;
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
        $this->currentSpeed = 80;

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

      public function getNbSeat(): int
    {
        return $this->nbSeat;
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
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}