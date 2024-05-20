<?php
// Virus.php

class Virus
{
    private $weight;
    private $age;
    private $name;
    private $species;
    private $children = [];

    public function __construct($weight, $age, $name, $species)
    {
        $this->weight = $weight;
        $this->age = $age;
        $this->name = $name;
        $this->species = $species;
    }

    public function addChild(Virus $child)
    {
        $this->children[] = $child;
    }

    public function __clone()
    {
        $this->name .= '_clone';
        $this->age = 0; // Початковий вік для клонованого віруса

        // Глибоке клонування дітей
        $this->children = array_map(function($child) {
            return clone $child;
        }, $this->children);
    }

    public function display()
    {
        $info = "Name: {$this->name}, Weight: {$this->weight}, Age: {$this->age}, Species: {$this->species}" . PHP_EOL;
        if (!empty($this->children)) {
            $info .= "Children: " . PHP_EOL;
            foreach ($this->children as $child) {
                $info .= $child->display();
            }
        }
        return $info;
    }
}

