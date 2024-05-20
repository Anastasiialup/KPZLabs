<?php

// Файл: WeaponDecorator.php

require_once 'InventoryDecorator.php';

class WeaponDecorator extends InventoryDecorator {
    public function getDescription() {
        return $this->hero->getDescription() . ' with a weapon';
    }
}
?>
