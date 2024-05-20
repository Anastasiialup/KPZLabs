<?php

// Клас для представлення корму для тварин
class Food {
    protected $name;
    protected $quantity;

    public function __construct($name, $quantity) {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}