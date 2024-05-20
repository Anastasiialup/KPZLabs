<?php

// Клас для інвентаризації зоопарку
class Inventory {
    protected $animals;
    protected $employees;
    protected $equipment;

    public function __construct($animals, $employees, $equipment) {
        $this->animals = $animals;
        $this->employees = $employees;
        $this->equipment = $equipment;
    }

    public function displayAnimals() {
        foreach ($this->animals as $animal) {
            $cageInfo = $animal->getCage() ? " in Cage: " . $animal->getCage()->getCageNumber() : "";
            echo "Animal: " . $animal->getName() . ", Species: " . $animal->getSpecies() . ", Food: " . $animal->getFood() . $cageInfo . "\n";
        }
    }

    public function displayEmployees() {
        foreach ($this->employees as $employee) {
            echo "Employee: " . $employee->getName() . ", Position: " . $employee->getPosition() . "\n";
        }
    }

    public function displayEquipment() {
        foreach ($this->equipment as $item) {
            echo "Equipment: " . $item->getName() . ", Description: " . $item->getDescription() . "\n";
        }
    }
}
