<?php

// Файл: Warrior.php

require_once 'Hero.php';

class Warrior extends Hero {
    public function getDescription() {
        return "{$this->name} is a warrior";
    }
}
