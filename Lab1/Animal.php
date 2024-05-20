<?php

// Клас для представлення тварин

class Animal
{
    private $name;
    private $species;
    private $food;
    private $cage;

    public function __construct($name, $species, $food, $cage = null)
    {
        $this->name = $name;
        $this->species = $species;
        $this->food = $food;
        $this->cage = $cage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function getCage()
    {
        return $this->cage;
    }
}
