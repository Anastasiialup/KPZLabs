<?php

// Клас для представлення приладдя зоопарку
class Equipment {
    private $name;
    private $quantity;
    private $responsibleKeeper;

    public function __construct($name, $quantity, $responsibleKeeper) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->responsibleKeeper = $responsibleKeeper;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function increaseQuantity($amount) {
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount) {
        if ($this->quantity >= $amount) {
            $this->quantity -= $amount;
        } else {
            echo "Error: Not enough {$this->name} in stock.\n";
        }
    }

    public function getResponsibleKeeper() {
        return $this->responsibleKeeper;
    }
}