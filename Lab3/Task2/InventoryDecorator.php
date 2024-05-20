<?php

// Файл: InventoryDecorator.php

require_once 'Hero.php';

abstract class InventoryDecorator extends Hero {
    protected $hero;

    public function __construct(Hero $hero) {
        $this->hero = $hero;
    }

    abstract public function getDescription();
}