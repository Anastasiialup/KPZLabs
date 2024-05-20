<?php

// Файл: ArmorDecorator.php

require_once 'InventoryDecorator.php';

class ArmorDecorator extends InventoryDecorator {
    public function getDescription() {
        return $this->hero->getDescription() . ' wearing armor';
    }
}

?>
