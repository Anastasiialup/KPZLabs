<?php

// Файл: Paladin.php

require_once 'Hero.php';

class Paladin extends Hero {
    public function getDescription() {
        return "{$this->name} is a paladin";
    }
}

?>
