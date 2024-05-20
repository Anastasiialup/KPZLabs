<?php

// Файл: Mage.php

require_once 'Hero.php';

class Mage extends Hero {
    public function getDescription() {
        return "{$this->name} is a mage";
    }
}
